<?php 
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $cno=$_POST['cno'];
  $email=$_POST['email'];
  $bgroup=$_POST['bgroup'];
  try
{
   /* $host="localhost";
    $port=3306;
    $dbname="project";
    $dbuser="root";
    $dbpass="root";*/

 //   $cn=new PDO("mysql:host=$host; port=$port; dbname=$dbname",$dbuser,$dbpass);
    $cn=mysqli_init(); mysqli_ssl_set($cnn, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "myazsqldemo.mysql.database.azure.com", "myadmin@myazsqldemo", {Server@1}, {project}, 3306);
}

catch(PDOException $e)
{
    echo $e-> getmessage();
    die();
}

$sql="insert into reciver(firstname,lastname,contcactno,email,bloodgroup) values('$fname','$lname',$cno,'$email','$bgroup')";
$result=$cn->query($sql);

$rowcount=$result->rowCount();

if($rowcount==1)
{
   ?>
    <script type="text/javascript">alert('Successfully Registered !!!');</script>
    <?php
    header("location:home.php");
}
else 
{
    ?>
    <script type="text/javascript">alert('please register First !!!');</script>
    <?php
    header("location:register1.html");
}




?>