<?php
include "config.php";

// Get the status value from the URL parameter
$status = $_GET['Status'];

// Determine if the status is "present" or "absent"
$isClickable = ($status == 'present') ? true : false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
</head>
<body>
    <?php if ($isClickable): ?>
        <a href="sample.php?uid=<?php echo $items['ID'] ?>">View Details</a>
    <?php else: ?>
        <p>Not Clickable</p>
    <?php endif; ?>
</body>
</html>
