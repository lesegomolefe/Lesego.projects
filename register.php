<?php

include 'config.php';
$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');


if(isset($_POST['submit'])){
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $cpass =  $_POST['cpassword'];

   /* $sql =  "SELECT * FROM user_form WHERE email = '$email'";
    // if(mysqli_num_rows($select) > 0){
        if($result=mysqli_query($conn,$sql)){
         //   $row=  mysqli_num_rows($result);
          //  $row = mysqli_fetch_assoc($result);
      //  $_SESSION['user_id'] = $row['id'];
        $message[] = 'user already exist';
     }else{
       mysqli_query( "INSERT INTO 'user_form'(name, email, password) VALUES('$name','$email','$password')");
        $message[] = 'registered successfully!';
        header('location:login.php');
     }
   
 
    }*/
       
    if(mysqli_num_rows($select) == 0 ){
         $select= "INSERT INTO 'user_form'(name, email, password) VALUES('$name','$email','$password')";
      
       $result= mysqli_query($conn, $select);
        $message[] = 'registered successfully!';
        header('location:login.php');
        if(!$result){
            $message[] = 'user already exist';

        }
     
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
}

?>
    <div class="form-container">
        <form action="" method="post">
            <h3>register now</h3>
            <input type="text" name="name" required placeholder="enter username" class="box">
            <input type="email" name="email" required placeholder="enter email" class="box">
            <input type="password" name="password" required placeholder="enter password" class="box">
            <input type="password" name="cpassword" required placeholder="confirm password" class="box">
            <input type="submit" name="submit"  class="btn" value="register now">
            <p>already have an account? <a href="login.php">Login now</a></p>
        </form>

    </div>
    
</body>
</html>