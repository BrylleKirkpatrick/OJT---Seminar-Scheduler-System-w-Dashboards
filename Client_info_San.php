<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Status Update</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        if (isset($_GET['Lastname']) || isset($_GET['Firstname'])) {
            $lastname = $_GET['Lastname'];
            $firstname = $_GET['Firstname'];

            $query = "SELECT * FROM clients WHERE Lastname LIKE '%$lastname%' AND Firstname LIKE '%$firstname%'";
            $query_run = mysqli_query($conn, $query);

            if ($query_run) {
                if (mysqli_num_rows($query_run) > 0) {
                    $count = 1;
                    while ($items = mysqli_fetch_assoc($query_run)) {
                        ?>
                        <tr>
                            <td><?= $count; ?></td>
                            <td><?= $items['Lastname']; ?></td>
                            <td><?= $items['Firstname']; ?></td>
                            <td><?= $items['Middlename']; ?></td>
                            <td><?= $items['Birthdate']; ?></td>
                            <td><?= $items['Stat']; ?></td>
                            <td>
                                <?php
                                $id = $items['ID'];
                                if (!empty($id)) {
                                    ?>
                                    <!-- Button to Open the Modal -->
                                    <button type="button" class="btn btn-primary openModalBtn" data-toggle="modal" data-target="#myModal<?= $items['ID']; ?>">
                                        Update
                                    </button>

                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal<?= $items['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title">UPDATE STATUS</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <!-- Modal Body -->
                                                <form action="function.php" method="post">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="uid" value="<?= $items['ID'] ?>">
                                                        <div class="form-group">
                                                            <label for="Stat">STATUS:</label>
                                                            <select class="form-control" id="Stat" name="Stat">
                                                                <option class="text-center" value="" disabled selected> CHOOSE:</option>
                                                                <option class="text-center" value="Present"> Present</option>
                                                                <option class="text-center" value="Absent"> Absent</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Modal Footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <input type="submit" class="btn btn-primary" value="Update" name="submit_button">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                } else {
                                    echo "No ID provided";
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                        $count++;
                    }
                    ?>
                    </tbody>
                    </table>
                    <?php
                } else {
                    echo "<p class='alert alert-danger'>Fatal error! No records found</p>";
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script/function.js"></script>
</body>
</html>
