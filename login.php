<?php

include 'config.php';
$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');
if(isset($_POST['submit'])){
  //  $name =  $_POST['name'];
    $email =  $_POST['email'];
    $password  =  $_POST['password'];
  //  $cpassword =  $_POST['cpassword'];

    $sql = "SELECT * FROM 'user_form' WHERE email = '$email' AND password = '$password' or die ('query failed')";
     if($result=mysqli_query($conn,$sql)){
      $row=  mysqli_num_rows($result);
;
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        header('location:index.php');
      
    
     }else{
          $message[] = 'incorrect password or email';
     }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
            <h3>login now</h3>
          
            <input type="email" name="email" required placeholder="enter email" class="box">
            <input type="password" name="password" required placeholder="enter password" class="box">
           
            <input type="submit" name="submit"  class="btn" value="login now">
            <p>don't have an account? <a href="register.php">Register now</a></p>
        </form>

    </div>
    
</body>
</html>