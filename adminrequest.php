<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank System</title>
    <link rel="stylesheet" type="text/css" href="style2.css"/>
</head>
<body bgcolor="whitesmoke">
    <div class="topnav">
        <a class="active" href="Home.php">Home</a>
        <a class="active" href="choice.html">Register</a>
        <a class="active" href="search.php">Search</a>
        <a class="active" href="adminrequest.php">Requests</a>
        <a class="active" href="alloacte.php">Allocate</a>
        <a class="active" href="report.php">Report</a>
    </div>

    <center>
        <h1>Requests</h1>
        <?php
        try {
            $cn = mysqli_init();
            mysqli_ssl_set($cn, NULL, NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);
            mysqli_real_connect($cn, "myazsqldemo.mysql.database.azure.com", "myadmin@myazsqldemo", "Server@1", "project", 3306);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

        $sql = "SELECT firstname, lastname, contcactno, bloodgroup FROM reciver";
        $result = $cn->query($sql);

        $rowcount = $result->num_rows;

        if ($rowcount > 0) {
            echo "<table border='1' align='center' style='border-collapse:collapse;'>
                    <tr>
                        <th>Receiver Name</th>
                        <th>Contact No</th>
                        <th>Blood Group</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['firstname'] . " " . $row['lastname'] . "</td>
                        <td>" . $row['contactno'] . "</td>
                        <td>" . $row['bloodgroup'] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No data found !!!</p>";
        }

        mysqli_close($cn);
        ?>
    </center>
</body>
</html>
