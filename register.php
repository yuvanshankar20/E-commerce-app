
<?php

$username=$_POST['username'];
$password=$_POST['password1'];
$mobile=$_POST['mobile'];

$conn=new mysqli("localhost","root","","intern_acme");

$sql_new=mysqli_query($conn,"select * from register");

$sql_obj=mysqli_query($conn,"select * from register where username='$username'");

$total_rows=mysqli_num_rows($sql_obj);
if($total_rows>0);
{
    echo "<h1>Username already taken</h1>";
    echo "<a href='registration.html'>try again</a>";
    die;
    
}

$cmd="insert into register(username,password,mobile) values('$username','$password','$mobile')";

echo "$cmd <br>"

$sql_result=mysqli_query($conn,$cmd);

if($sql_result)
{
    echo "registration successful";
}
else{
    echo "registration failed";
}
?>