<?php
session_start();
header('location:index.php');

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'userregistration');
$name = $_POST['user'];
$password= $_POST['password'];
$query= "SELECT * from usertable where name ='$name'";
$result= mysqli_query($conn,$query);
$num= mysqli_num_rows($result);
if($num==1){
    echo"Username Already Taken";

}
else{
    $reg="insert into usertable(name,password)values('$name','$password')";
    mysqli_query($conn,$reg);
    echo"registration Successfully";
}

?>