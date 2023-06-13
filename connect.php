<?php



//database connection
$conn = new mysqli('localhost','root','','myportfolio');

if($conn->connect_error){
    echo "$conn->connect_error";
    die ("connection Failed:". $conn->connect_error);
}

if(isset($_POST['submit'])){
     $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $sql ="insert into registration (fullname, email, subject, message) values ('$fullname', '$email', '$subject', '$message')";
    if($conn->query($sql) === TRUE){
      header("location:home.php");
    }else{
        echo "Error: ". $sql . "<br>" .$conn->error;
    }
    
    $conn->close();

}

?>