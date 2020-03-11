<?php
session_start();


$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'userregistration');
$name = $_POST['user'];
$password= $_POST['password'];
$query= "SELECT * from usertable where name ='$name' &&  password='$password'";
$result= mysqli_query($conn,$query);
$num= mysqli_num_rows($result);
if($num==1){
    header('location:home.php');

}
else{
    header('location:index.php');
}

?>