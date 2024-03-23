<?php


  
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $cno=$_POST['cno'];
  $email=$_POST['email'];
  $bgroup=$_POST['bgroup'];
  $date=$_POST['date'];
  

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

$sql="insert into reciver(firstname,lastname,contactno,email,bloodgroup,date) values('$fname','$lname',$cno,'$email','$bgroup','$date')";
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