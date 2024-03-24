<?php
$uname = $_POST['unme'];
$pass = $_POST['pwd'];

if ($uname === 'admin' && $pass === 'admin@123') {
    header("location:adminhome.php");
    exit;
} else {
    echo "Admin Not Found";
}
?>
