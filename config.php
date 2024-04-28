<?php
ob_start();
    // session_start();
    $conn = mysqli_connect("localhost", "root", "", "db_scheduler");
ob_end_flush();
?>
