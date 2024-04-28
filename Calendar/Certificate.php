
<?php
include "config.php";

$id = $_GET['uid'];

$view = "SELECT * FROM clients WHERE ID = $id";
$result = mysqli_query($conn, $view);

if (!$result) {
    die('Error executing query: ' . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);

if (!$row) {
    die('No data found for ID: ' . $id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/Certificate.css">
</head>

<body class="d-flex flex-column vh-100">
    <div class="container-fluid">
        <div class="row">
            <!-- First section -->
            <section id="section-1" class="col-lg-8 d-flex flex-column justify-content-center">
                <img src="images/logo.png">
                <h1 class="mb-5"><b>CERTIFICATE</b></h1>
                <p class="mb-3"><b>Name: </b> <u><?php echo $row['Lastname'] . ', ' . $row['Firstname'] . ' ' . $row['Middlename']; ?></u>.</p>
                <p class="mb-5"><b>Birthday: </b> <u><?php echo $row['Birthdate']; ?></u>.</p>
                <p class="mb-5"><b>This is in cooperation of : </b> <?php echo $row['Lastname'] . ', ' . $row['Firstname'] . ' ' . $row['Middlename']; ?> in the day of <?php echo $row['Birthdate']; ?>.</p>
                <div class="d-flex">
                    <button class="btn button-close me-2"><a href="appointment.php?uid=<?php echo $id; ?>" class="text-white text-decoration-none">Close</a></button>
                    <form action="client_info_Edit.php" method="GET">
                        <input type="hidden" name="uid" value="<?php echo $id; ?>">
                        <button type="submit" class="btn button-update">Update</button>
                        <button type="print" class="btn button-print">Print</button>
                    </form>
                </div>
            </section>
            
            <!-- Second section -->
            <section id="section-2" class="col-lg-4 d-flex flex-column">
                <div class="container-fluid py-5">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="text-center">
                            <img src="images/calendar.png" style="width: 320px" class="mb-3">
                            <p>Please review the details for accuracy. If the information is correct, update it, make any necessary changes, and then proceed with printing.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script/function.js"></script>
</body>

</html>

