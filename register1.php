<?php


  
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $cno=$_POST['cno'];
  $email=$_POST['email'];
  $bgroup=$_POST['bgroup'];
  $date=$_POST['date'];
  $ans=$_POST['ans'];
  $que=$_POST['que'];
  $pass=$_POST['pass'];

  try
{
    /*$host="localhost";
    $port=3306;
    $dbname="project";
    $dbuser="root";
    $dbpass="root";

    $cn=new PDO("mysql:host=$host; port=$port; dbname=$dbname",$dbuser,$dbpass);*/
    $cn = mysqli_init();
    mysqli_ssl_set($cn,NULL,NULL,DigiCertGlobalRootG2.crt.pem,NULL,NULL )
}

catch(PDOException $e)
{
    echo $e-> getmessage();
    die();
}

$sql="insert into register(firstname,lastname,contactno,email,bloodgroup,passward,recoveryque,answer,lasttime) values('$fname','$lname',$cno,'$email','$bgroup',$pass,'$que','$ans','$date')";
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