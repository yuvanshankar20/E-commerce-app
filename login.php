<?php

session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$conn=new mysqli("localhost","root","","intern_acme");

$sql_obj=mysqli_query($conn,"select * from register where username='$username' and password='$password'");

$total_rows=mysqli_num_rows($sql_obj);

if($total_rows==0)
{
    echo "<h1>invalid login</h1>";
    echo "<a href='login.html'>login</a>";
    $_SESSION['login_status']=false;
    die;
}

echo "<h1>Login success</h1>";
$_SESSION['login_status']=true;

header("location:homeshop.html");

?>