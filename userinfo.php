<?php
$conn = mysqli_connect("localhost","root","");
if($conn){
    echo "Connection Successfully";
}else{
    echo "error";

}

mysqli_select_db($conn,"creamistcafedata");
$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$orderItem = $_POST['orderItem'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];

$query = "insert into cafedata(username,email,mobile,customerOrder,quantity,address) values('$username','$email','$mobile','$orderItem','$quantity','$address')";
mysqli_query($conn,$query);
header('location:index.php');

?>