<?php
include_once 'process.php';

if(isset($_POST['save']))
{

    $product = $_POST['product'];
    $seller = $_POST['seller'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $gst = $_POST['gst'];
    $total = $_POST['total'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $sql = "INSERT INTO student (product,seller,price,quantity,gst,total,address,email)
	 VALUES ('$product','$seller','$price','$quantity','$gst','$total','$address','$email')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>