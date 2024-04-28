<?php
include 'config.php';

if(isset($_GET['uid'])) {
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

    if (isset($_POST['submit'])) {
        $nameL = strtoupper($_POST['Lastname']);
        $nameF = strtoupper($_POST['Firstname']);
        $nameM = strtoupper($_POST['Middlename']);
        $birthdate = $_POST['Birthdate'];

        $sql = "UPDATE clients SET Lastname='$nameL', Firstname='$nameF', Middlename='$nameM', Birthdate='$birthdate' WHERE ID = $id";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die('Error updating data: ' . mysqli_error($conn));
        } else {
            echo "<script>alert('Data updated successfully!'); window.location.href='sample.php?uid=$id'</script>";
        }
    }
} else {
    die('No user ID provided');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/Appointment.css">
</head>
<body class="d-flex flex-column vh-100">
    <div class="container-fluid">
        <div class="row">
            <!-- First section -->
            <section id="section-1" class="col-lg-8 d-flex flex-column justify-content-center align-items-center ml-3">
                <img src="images/logo.png">
                <h3 class="mt-5">EDIT DETAIL FOR : <?php echo $row['Lastname']; ?></h1>
                <form method="POST" class="w-50">
                    <input type="hidden" name="ID" value="<?php echo $id; ?>">
                    <div class="form-group mt-3">
                        <label for="nameL mb-2" class="mb-2">Lastname:</label>
                        <input type="text" id="nameL" name="Lastname" class="form-control" value="<?php echo $row['Lastname']; ?> " style="width: 100%;">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nameF" class="mb-2">Firstname:</label>
                        <input type="text" id="nameF" name="Firstname" class="form-control" value="<?php echo $row['Firstname']; ?>" style="width: 100%;">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nameM" class="mb-2">Middlename:</label>
                        <input type="text" id="nameM" name="Middlename" class="form-control" value="<?php echo $row['Middlename']; ?>" style="width: 100%;">
                    </div>
                    <div class="form-group mt-3">
                        <label for="birthdate" class="mb-2">Birthdate:</label>
                        <input type="date" id="birthdate" name="Birthdate" class="form-control" value="<?php echo $row['Birthdate']; ?>" style="width: 100%;">
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="<?php echo $row['Time']; ?>">
                            <label class="form-check-label" for="flexRadioDefault1">
                            8am-12pm
                            </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" Value="<?php echo $row['Time']; ?>" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                            1pm-5pm
                            </label>
                    </div>
                    <button type="submit" class="btn button-update mt-3" name="submit">Update</button>
                    <button class="btn button-close mt-3"><a href="appointment.php?uid=<?php echo $id; ?>" class="text-white text-decoration-none">Close</a></button>
                </form>
            </section>
            <!-- Second section -->
            <section id="section-2" class="col-lg-4 d-flex flex-column">
                <div class="container-fluid py-5">
                    <div class="d-flex justify-content-end mt-5">
                    </div>
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="text-center">
                            <img src="images/calendar.png" style="width: 320px" class="mb-3">
                            <p>Please log in with your username and password to proceed to the next step.</p>
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
