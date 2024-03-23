<!Doctype html>
<html>
<body bgcolor="white">
<title>Blood Bank System</title>
<link rel="stylesheet" type="text/css" href="style2.css"/>
<div class="topnav">
 
<a class="active " href="adminhome.php">Home</a>
                <a class="active " href="choice.html">Register</a>
                <a class="active " href="search.php">Search</a>
                <a class="active " href="adminrequest.php">Requests</a>
                
                <a class="active" href="alloacte.php">alloacte</a>
                <a class="active" href="report.php">Report</a>
 
</div>
<center>
<body>
    <div class="container">
        <form action="" method="POST">

            <h1> Serch For Blood </h1>


           <!-- <label>First Name</label>
            <input type="text" name="fname" pattern="[a-zA-Z]+" title="Invalid name Format" required> <br><br>

            <label>Last Name</label>
            <input type="text" name="lname" pattern="[a-zA-Z]+" title="Invalid name Format" required><br><br>

            <label>Contact No</label>
            <input type="Text" name="cno" pattern="[0-9]{10}" title="Contact no must be of 10 digits" required><br><br>

            <label>Email id </label>
            <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                title="Invalid Email Format" required> <br><br>-->

            <label>Select Blood Group:</label>
            <select name="bgroup" required>
                <option>O+</option>
                <option>A+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>O-</option>
                <option>A-</option>
                <option>B-</option>
                <option>AB-</option>
            </select> <br> <br>

            



            <input type="submit" value="serch"> &nbsp;
            <button><a href="home.php"> Back To Home</a></button>




    </div>
    </form>
</body>

</html>

<?php

if(isset($_POST['bgroup']))
{
  $bgroup=$_POST['bgroup'];
  
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

$sql="SELECT  * FROM register WHERE lasttime <= NOW() - INTERVAL 3 MONTH and bloodgroup='$bgroup'";
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
<?php

echo"<table border=1 align='center' style='border-collapse:collapse';>
        <tr>
            
            <th>donor name</th>
            <th>Blood Group</th>
            <th>Last Time</th>
            <th>contact no</th>
        </tr>";
if($rowcount>0)
{
    foreach($result as $row)
    {
        echo"<tr>
                
                <td>".$row[0]." ".$row[1]."</td>
                <td>".$row[3]."</td>
                <td>".$row[7]."</td>
                <td>".$row[8]."</td>
        </tr>";
    }
    echo "</table>";
}
else 
{
    echo"$bgroup is not Available";
/*?>
    <script type="text/javascript">alert('No data found !!!');</script>
    <?php*/
}
?>
</body>
</html>
<?php


}


?>
    



