<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank System</title>
    <link rel="stylesheet" type="text/css" href="style2.css" />
</head>
<body bgcolor="whitesmoke">
    <div class="topnav">
        <a class="active" href="adminhome.php">Home</a>
        <a class="active" href="choice.html">Register</a>
        <a class="active" href="search.php">Search</a>
        <a class="active" href="adminrequest.php">Requests</a>
        <a class="active" href="alloacte.php">Allocate</a>
        <a class="active" href="report.php">Report</a>
    </div>

    <?php
    try {
        $cn = mysqli_init();
        mysqli_ssl_set($cn, NULL, NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);
        mysqli_real_connect($cn, "myazsqldemo.mysql.database.azure.com", "myadmin@myazsqldemo", "Server@1", "project", 3306);
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }

    $sql = "SELECT id, firstname, lastname, contactno, bloodgroup FROM register";
    $result = $cn->query($sql);

    if ($result) {
        $rowcount = mysqli_num_rows($result);
    } else {
        $rowcount = 0;
    }
    ?>

    <h1>Report</h1>
    <table border="1" align="center" style="border-collapse:collapse;">
        <tr>
            <th>Id</th>
            <th>Donor Name</th>
            <th>Contact No</th>
            <th>Blood group</th>
        </tr>
        <?php
        if ($rowcount > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['firstname'] . " " . $row['lastname'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['bloodgroup'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>
    <?php mysqli_close($cn); ?>
</body>
</html>
