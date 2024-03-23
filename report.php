<!Doctype html>
<html>

<head>
    <center>

<body bgcolor="whitesmoke">
    <form name="Home" method="post">
        <table>
            <title>Blood Bank System</title>
            <link rel="stylesheet" type="text/css" href="style2.css" />
            <div class="topnav">
            <a class="active " href="adminhome.php">Home</a>
                <a class="active " href="choice.html">Register</a>
                <a class="active " href="search.php">Search</a>
                <a class="active " href="adminrequest.php">Requests</a>
                
                <a class="active" href="alloacte.php">alloacte</a>
                <a class="active" href="report.php">Report</a>
             
            </div>
            <body>

<?php
  
  /*if(isset($_POST['bgroup']))
  {
  $bgroup=$_POST['bgroup'];*/

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

$sql="select id,firstname,lastname,contactno,bloodgroup from register ";
$result=$cn->query($sql);

$rowcount=$result->rowCount();
?>
<html>
    <head>
        <style>
            td,th{
                padding:10px;
            }
            table{
                margin-top:20px;
                width:350px;
            }
        </style>
    </head>
    <body>
        <h1> Report <h1>
<?php

echo"<table border=1 align='center' style='border-collapse:collapse';>
        <tr>
            <th>Id</th>
            <th>Donor Name</th>
            <th>Contact No</th>
            <th>Blood group</th>
        </tr>";
if($rowcount>0)
{
    foreach($result as $row)
    {
        echo"<tr>
                <td>".$row[0]."</td>
                <td>".$row[1]." ".$row[2]."</td>
                <td>".$row[3]."</td>
                <td>".$row[4]."</td>
        </tr>";
    }
    echo "</table>";
}
else 
{
    echo"$bgroup is not Available";
?>
    <script type="text/javascript">alert('No data found !!!');</script>
<?php
}
?>
</body>
</html>
<?php

?>
 </body>
      
    
   
    </head>

</html>
