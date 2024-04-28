<!-- database connection -->
<?php
$conn = mysqli_connect('localhost', 'root', '', 'login_register');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
