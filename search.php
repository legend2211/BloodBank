<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank System</title>
    <link rel="stylesheet" type="text/css" href="style2.css"/>
</head>
<body bgcolor="white">
    <div class="topnav">
        <a class="active" href="adminhome.php">Home</a>
        <a class="active" href="choice.html">Register</a>
        <a class="active" href="search.php">Search</a>
        <a class="active" href="adminrequest.php">Requests</a>
        <a class="active" href="alloacte.php">Allocate</a>
        <a class="active" href="report.php">Report</a>
    </div>

    <center>
        <form name="Search" method="post" action="">
            <table>
                <tr>          
                    <td><font size="6">Blood Group:</font></td>
                    <td>
                        <select name="bgroup">
                            <option>O+</option>
                            <option>A+</option>
                            <option>B+</option>
                            <option>AB+</option>
                            <option>O-</option>
                            <option>A-</option>
                            <option>B-</option>
                            <option>AB-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Search" name="b2"/></td>
                </tr>
            </table>
        </form>
    </center>

    <?php
    if(isset($_POST['bgroup'])) {
        $bgroup = $_POST['bgroup'];

        try {
            $cn = mysqli_init();
            mysqli_ssl_set($cn, NULL, NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);
            mysqli_real_connect($cn, "myazsqldemo.mysql.database.azure.com", "myadmin@myazsqldemo", "Server@1", "project", 3306);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

        $sql = "SELECT * FROM register WHERE bloodgroup='$bgroup'";
        $result = $cn->query($sql);

        $rowcount = $result->num_rows;
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
                echo "<table border='1' align='center' style='border-collapse:collapse;'>
                        <tr>
                            <th>Donor Name</th>
                            <th>Contact No</th>
                        </tr>";
                if($rowcount > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>".$row['firstname']." ".$row['lastname']."</td>
                                <td>".$row['contcactno']."</td>
                              </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "$bgroup is not Available";
                    ?>
                    <script type="text/javascript">alert('No data found !!!');</script>
                    <?php
                }
                ?>
            </body>
        </html>
        <?php
    }
    ?>
</body>
</html>
