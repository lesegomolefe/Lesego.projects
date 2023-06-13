<?php
include 'config.php';
$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');


session_start();

//$user_id = $_POST['user_id'];
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
  header('location:index.php');  
};

if(isset($_GET['logout'])){
   // unset($user_id);
    session_destroy();
    header('location:login.php'); 
    
  };
if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $select_cart = mysqli_query($conn, "SELECT * FROM 'cart' WHERE name = '$product_name'
    AND user_id = '$user_id'") or die('query failed');
    if(mysqli_num_rows($select_cart) > 0){
        $message[] = 'product already added to cart!';
    }else{
        mysqli_query($conn, "INSERT INTO 'cart' (user_id, name, price, image, quantity) VALUES
        ('user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')")
        or die('query failed');
        $message[] = 'product already added to cart!';
    }
}

if(isset($_POST['update_cart'])){
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "UPDATE 'cart' SET quantity = '$update_quantity' WHERE id ='$update_id'") or die('query failed');
    $message[] = 'cart  quantity updated successfully!';

}

if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM 'cart' WHERE id = '$remove_id'") or die('query failed');
    header('location:index.php');
}

if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM 'cart' WHERE user_id = '$user_id'") or die('query failed');
    header('location:index.php');

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
}

?>
<div class="container">
    <div class="user-profile">
        <?php
        $select_user =  "SELECT * FROM 'user_form' WHERE id= '$user_id'
        or die('query failed')";
        if($result=mysqli_query($conn,$select_user)){
            $row = mysqli_num_rows($result);
            $fetch_user = mysqli_fetch_assoc($select_user);
        }
          

        ?>
        <p>username : <span><?php echo $fetch_user['name']; ?></span></p>
        <p>email : <span> <?php echo $fetch_user['email']; ?></span></p>
        <div class="flex">
            <a href="login.php" class="btn">login</a>
            <a href="register.php" class="option-btn">register</a>
            <a href="index.php?logout=<?php echo $user_id; ?>" onclick=" return confirm('are your sure you want to logout?');" 
            class="delete-btn">Logout</a>

        </div>


    </div>
    <div class="products">

    <h1 class="heading">latest products</h1>
        <div class="box-container">
        <?php
         $select_product = mysqli_query($conn, "SELECT * FROM 'products'")
         or die('query failed');
         if(mysqli_num_rows($select_product) > 0){
           while( $fetch_product = mysqli_fetch_assoc($select_product)){
         ?>
         <form action="" method="post" class="box">
            <img src="cam.jpg/<?php echo $fetch_product['image']  ?>" alt="">
            <div class="name"><?php echo $fetch_product['name'];?></div>
            <div class="price"><?php echo $fetch_product['price'];?></div>
            <input type="number" min="1" name="product_quqntity" value="1">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image'];?>">
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name'];?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price'];?>">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">

         </form>
         <?php
         };
        };

        ?>
        </div>

    </div>
    <div class="shoppin-cart">
        <h1 class="heading">shopping cart</h1>
        <table>
            <thead>
                <th>image</th>
                <th>name</th>
                <th>price</th>
                <th>quantity</th>
                <th>total price</th>
                <th>action</th>
            </thead>
            <tbody>
                <?php
                $select_product = mysqli_query($conn, "SELECT * FROM 'cart' 
                WHERE user_id = '$user_id'") or die('query failed');
                if(mysqli_num_rows($cart_query) > 0){
                    while($fetch_cart = mysqli_fetch_assoc($cart_query)){
                ?> 
                <tr>
                    <td><img src="cam <?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                    <td><?php echo $fetch_cart['name']; ?></td>
                    <td><?php echo $fetch_cart['price']; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>" >
                            <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>" >
                            <input type="submit" name="update_cart" value="update" class="option-btn">
                        </form>
                    </td>
                    <td>$<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']);?>/-</td>
                    <td><a href="index.php?remove=<?php echo $fetch_cart['id'];?>"
                    class="delete-btn" onclick="return confirm('remove item from acrt?');">remove</a></td>
                </tr>

                <?php
                $grand_total += $sub_total;
                    };
                }else{
                    echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6"> no item added </td></tr>';
                }

                ?>
                <tr class="table-bottom">
                    <td colspan="4">grand total :</td>
                    <td>$<?php $grand_total; ?>/-</td>
                    <td><a href="index.php?delete_all" onclick="return confirm('delete all from cart?');"
                    class="delete-btn"<?php echo ($grand_total > 1)? '':'disabled';?>>delete all</a</td>

                </tr>

         </tbody>

        </table>
        <div class="cart-btn">
            <a href="#" class="btn <?php echo ($grand_total > 1)? '':'disabled';?>">Proceed to checkout</a>

        </div>

    </div>


</div>
    
</body>
</html>