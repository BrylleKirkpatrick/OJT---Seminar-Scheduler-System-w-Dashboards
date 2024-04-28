<!-- -----------------Client View Details----------- -->
<?php
include "config.php";
if (isset($_GET['Lastname']) && !empty($_GET['Lastname']) || isset($_GET['Firstname']) && !empty($_GET['Firstname'])) {
    $lastname = mysqli_real_escape_string($conn, $_GET['Lastname']);
    $firstname = mysqli_real_escape_string($conn, $_GET['Firstname']);

    $query = "SELECT * FROM clients WHERE Lastname LIKE '%$lastname%' AND Firstname LIKE '%$firstname%'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if (mysqli_num_rows($query_run) > 0) {
            ?>
            <table>
                <tr>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Birthdate</th>
                    <th>Action</th>
                </tr>
                <?php
                while ($items = mysqli_fetch_assoc($query_run)) {
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($items['Lastname']); ?></td>
                        <td><?= htmlspecialchars($items['Firstname']); ?></td>
                        <td><?= htmlspecialchars($items['Middlename']); ?></td>
                        <td><?= htmlspecialchars($items['Birthdate']); ?></td>
                        <td><a href="sample.php?uid=<?= htmlspecialchars($items['ID']); ?>">View Details</a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        } else {
            echo "<p>No Record!</p>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!-- -----------Sanitary Present / Absent--------------- -->
<?php
include 'config.php';

if (isset($_POST['submit_button'])) {
    if (isset($_POST['Stat'])) {
        $id = $_POST['uid'];

        $view = "SELECT * FROM clients WHERE ID = $id";
        $result = mysqli_query($conn, $view);

        if (!$result) {
            die('Error executing query: ' . mysqli_error($conn));
        }

        $row = mysqli_fetch_assoc($result);

        if (!$row) {
            die('No data found for ID: ' . $id);
        }

        $status = ($_POST['Stat']);

        $sql = "UPDATE clients SET Stat='$status' WHERE ID = $id";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die('Error updating data: ' . mysqli_error($conn));
        } else {
            echo "<script>alert('Data updated successfully!'); window.location.href='sanitary.php?Lastname=&Firstname='</script>";
        }
    } else {
        die('No user ID provided');
    }
}
?>
<!-- --------------Business Status if present or absent------------ -->

<?php
include "config.php";
if (isset($_GET['Lastname']) || isset($_GET['Firstname'])) {
    $lastname = $_GET['Lastname'];
    $firstname = $_GET['Firstname'];

    $query = "SELECT * FROM clients WHERE Lastname LIKE '%$lastname%' AND Firstname LIKE '%$firstname%'";
    $query_run = mysqli_query($conn, $query);

    // Run display on recorded datas
    if ($query_run) {
        if (mysqli_num_rows($query_run) > 0) {
            while ($items = mysqli_fetch_assoc($query_run)) {
                ?>
                <tr>
                    <td>
                        <?= $items['Lastname']; ?>
                    </td>
                    <td>
                        <?= $items['Firstname']; ?>
                    </td>
                    <td>
                        <?= $items['Middlename']; ?>
                    </td>
                    <td>
                        <?= $items['Birthdate']; ?>
                    </td>
                    <?php

                    $status = $items['Stat'];

                    if ($status == 'Present') {
                        echo '<td><a href="sample.php?uid=' . $items['ID'] . '">Present</a></td>';
                    } else {
                        echo '<td></td>';
                    }
                    ?>
                </tr>
                <?php
            }
            ?>
            </table>
            <?php
        } else {
            echo "<p>No Record!</p>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

<!-- -----------------------adding client------------------ -->

<?php
include "config.php";

//capacity count
$maxCapacity = 60;

// current numbers
$sqlCount = "SELECT COUNT(*) AS count FROM clients";
$resultCount = mysqli_query($conn, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);
$currentCount = $rowCount['count'];

//check if capacity has been exceeded
if ($currentCount >= $maxCapacity) {
    echo "<script>alert('Capacity exceeded'); window.location.href='appointment.php'</script>";
    exit;
} elseif ($currentCount >= 50) {
    echo "<script>alert('Warning! Capacity almost full'); window.location.href='appointment.php'</script>";
}

if (isset($_POST['submit_button'])) {
    $nameL = strtoupper($_POST['Lastname']);
    $nameF = strtoupper($_POST['Firstname']);
    $nameM = strtoupper($_POST['Middlename']);
    $birthdate = $_POST['Birthdate'];

    $store = "INSERT INTO clients (Lastname,Firstname,Middlename,Birthdate) VALUES ('$nameL','$nameF','$nameM','$birthdate')";
    $result = mysqli_query($conn, $store);
    if (!$result) {
        echo "<script>alert('Insert Fail'); window.location.href='appointment.php'</script>";
    } else {
        echo "<script>alert('Data recorded successfully!'); window.location.href='appointment.php'</script>";
    }
}
?>