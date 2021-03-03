

<?php
session_start();
header('localhost:signin.php');
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'userregistration');
$name=$_POST['user'];
$password=$_POST['password'];
$s="select * from usertable where name='$name'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
 echo "username exists";
}
else{
 $reg="insert into usertable(name , password) values ('$name', '$password')";
mysqli_query($conn,$reg);
echo "registration success";
}
?>


