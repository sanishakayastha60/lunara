<?php
$servername = 'localhost';
$username ='root';
$password='';
$dbname='users';
//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if(!$conn){
    die("Connection failed. ".mysqli_connect_error());
}
//sql data insert
// $id=$_GET['id'];
$name=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$password=$_GET['password'];
 $sql="insert into users(name,phone,email,password) values('$name','$phone','$email','$password')";
 $result=mysqli_query($conn,$sql);
 if($result){
    header("Location: display.php");
    exit();
 }
 else{
    echo "error";
 }
 mysqli_close($conn)
?>