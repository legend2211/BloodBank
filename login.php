<?php
  $uname=$_POST['unme'];
  $pass=$_POST['pwd'];

  try
{
    $host="localhost";
    $port=3306;
    $dbname="project";
    $dbuser="root";
    $dbpass="root";

    $cn=new PDO("mysql:host=$host; port=$port; dbname=$dbname",$dbuser,$dbpass);
}

catch(PDOException $e)
{
    echo $e-> getmessage();
    die();
}

$sql="select * from register where email='$uname' and passward='$pass' ";
$result=$cn->query($sql);

$rowcount=$result->rowCount();

if($rowcount>=1)
{
    echo"login successfully";
    header("location:home.php");
}
else 
{
    echo"please register first";
    header("location:register1.html");
}

?>