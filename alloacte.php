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
    <div class="container">
        <form action="" method="POST">
            <h1>Search For Blood</h1>
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
            </select><br><br>
            <input type="submit" value="Search">&nbsp;
            <button><a href="home.php">Back To Home</a></button>
        </form>
    </div>

    <?php
    if (isset($_POST['bgroup'])) {
        $bgroup = $_POST['bgroup'];

        try {
            $cn = mysqli_init();
            mysqli_ssl_set($cn, NULL, NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);
            mysqli_real_connect($cn, "myazsqldemo.mysql.database.azure.com", "myadmin@myazsqldemo", "Server@1", "project", 3306);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

        $sql = "SELECT * FROM register WHERE lasttime <= NOW() - INTERVAL 3 MONTH AND bloodgroup='$bgroup'";
        $result = $cn->query($sql);

        if ($result) {
            $rowcount = mysqli_num_rows($result);
        } else {
            $rowcount = 0;
        }
        ?>

        <html>
        <head>
            <style>
                td, th {
                    padding: 10px;
                }

                table {
                    margin-top: 20px;
                    width: 350px;
                }
            </style>
        </head>
        <body>
        <h2>Search Results</h2>
        <?php
        if ($rowcount > 0) {
            echo "<table border='1' align='center' style='border-collapse:collapse;'>
                    <tr>
                        <th>Donor Name</th>
                        <th>Blood Group</th>
                        <th>Last Time</th>
                        <th>Contact No</th>
                    </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $row['firstname'] . " " . $row['lastname'] . "</td>
                        <td>" . $row['bloodgroup'] . "</td>
                        <td>" . $row['lasttime'] . "</td>
                        <td>" . $row['contactno'] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "$bgroup is not Available";
        }
        ?>
        </body>
        </html>
        <?php
        mysqli_close($cn);
    }
    ?>
</center>
</body>
</html>
