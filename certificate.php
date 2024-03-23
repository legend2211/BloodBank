<?php 

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $group=$_POST['bgroup'];

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
    
    $sql="select * from register where firstname='$fname'and lastname='$lname' and bloodgroup='$group' ";
    $result=$cn->query($sql);
    
    $rowcount=$result->rowCount();
    
    if($rowcount>=1)
    {
    
    ?>

<html>
<head>
    <title> Login page</title>
    <!--<style>
       div{text-align: center;}
    </style>-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
    <form action="login.php" method="POST">

        <h1>Certificate</h1>

        <h2> certificate of Apperatation</h2>

            <h2> Our Sincere and Heartful thanks to  <?php echo $fname." ".$lname ?> For the life saving Gift of Blood.you gave someone a better Tommarow for donating <?php echo $group?> Blood  </h2>  

            <h1> Be Our Blood Buddy For Life ! <h1>

        
    </div>

    </form>
</body>
</html>
        
    <?php
      
    }
    else 
    {
        echo"Please donate  fisrt"; 
        ?>
        <script type="text/javascript">alert('No Donar found !!!');</script>
        <?php
    }
?>