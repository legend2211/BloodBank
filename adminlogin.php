<?php
  $uname=$_POST['unme'];
  $pass=$_POST['pwd'];

 /* try
{
    $host="localhost";
    $port=3307;
    $dbname="project";
    $dbuser="root";
    $dbpass="";

    $cn=new PDO("mysql:host=$host; port=$port; dbname=$dbname",$dbuser,$dbpass);
}
catch(PDOException $e)
{
    echo $e->getmessage();
    die();
}

$sql="select * from login where username='$uname' and passward='$pass' ";
$result=$cn->query($sql);

$rowcount=$result->rowCount();*/

if($uname === 'admin' && $pass === 'admin@123')
{
    echo"login successfully";
    header("location:adminhome.php");
    exit;
}
else 
{
    echo"Admin Not Found";
   
}

?>

