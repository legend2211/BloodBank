<?php
$uname = $_POST['unme'];
$pass = $_POST['pwd'];

if ($uname === 'admin' && $pass === 'admin@123') {
    echo '<script>alert("Login successful"); window.location.href = "adminhome.php";</script>';
    exit;
} else {
    echo '<script>alert("Admin not found"); window.history.back();</script>';
}
?>
