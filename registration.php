<?php

$username=$_POST['username'];
$password=$_POST['password1'];
$mobile=$_POST['mobile'];

$conn=new mysqli("localhost","root","","intern_acme");

$sql_obj=mysqli_query($conn,"select * from register");

$cmd="insert into register(username,password,mobile) values('$username','$password','$mobile')";
echo "query - $cmd <br>";

$sql_result=mysqli_query($conn,$cmd);

if($sql_result)
{
    echo "registration successful";
    echo "<a href='login.html'>login</a>";
}
else{
    echo "registration failed";
}

?>