<?php
$uname = $_POST['unme'];
$pass = $_POST['pwd'];

try {
    $cn = mysqli_init();
    mysqli_ssl_set($cn, NULL, NULL, 'DigiCertGlobalRootG2.crt.pem', NULL, NULL);
    mysqli_real_connect($cn, "myazsqldemo.mysql.database.azure.com", "myadmin@myazsqldemo", "Server@1", "project", 3306);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

$sql = "SELECT * FROM register WHERE email='$uname' AND passward='$pass'";
$result = $cn->query($sql);

$rowcount = mysqli_num_rows($result);

if ($rowcount >= 1) {
    echo "Login successful";
    header("location: home.php");
    exit;
} else {
    echo "Please register first";
    header("location: register1.html");
    exit;
}
?>
