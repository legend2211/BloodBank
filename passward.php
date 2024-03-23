<?php 

    $uname=$_POST['uname'];
    $que=$_POST['que'];
    $cans=$_POST['cans'];
    $cpass=$_POST['cpass'];

    try
    {
        $host="localhost";
        $port=3306;
        $dbname="project";
        $dbuser="root";
        $dbpass="";
    
        $cn=new PDO("mysql:host=$host; port=$port; dbname=$dbname",$dbuser,$dbpass);
    }
    
    catch(PDOException $e)
    {
        echo $e-> getmessage();
        die();
    }
    
    $sql="select * from register where email='$uname'and recoveryque='$que' and answer='$cans' ";
    $result=$cn->query($sql);
    
    $rowcount=$result->rowCount();
    
    if($rowcount==1)
    {
        $sql="update register set passward='$cpass' where email='$uname' ";
        $result=$cn->query($sql);
        
        $rowcount=$result->rowCount();
      echo"Passward changed Successfully";
      
      ?>
      <script type="text/javascript">alert('Passward change Successfully !!!');</script>
      <?php

    }
    else 
    {
        echo"User Not Found"; 
        ?>
        <script type="text/javascript">alert('No user found !!!');</script>
        <?php
    }
?>