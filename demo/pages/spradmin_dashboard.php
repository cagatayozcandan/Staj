<?php
include '../includes/auth.php';
if ($_SESSION["role"] != "superadmin") {
    header("Location: ../login.php");
    exit();
}
?>

<h1>Super Admin Paneli</h1>
<p>Hoş geldin, <?php echo $_SESSION["username"]; ?>!</p>
<a href="../logout.php">Çıkış Yap</a>
