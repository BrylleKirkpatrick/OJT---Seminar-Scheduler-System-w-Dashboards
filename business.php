<!-- <?php

    include_once('config.php');    
    $view = "SELECT * FROM users";
    $result = mysqli_query($conn, $view);
    $row = mysqli_fetch_assoc($result);

    if($row['roles'] != 'Business' || $row['roles'] != 'Sanitary Inspector'){
        echo "<script>alert('You are not Allowed!'); window.location.href='index.php'</script>";
    }

?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSINESS DASHBOARD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/Appointment.css">
</head>

<body class="d-flex flex-column vh-100">
    <div class="container-fluid">
        <div class="row">
            <!-- First section -->
            <section id="section-1" class="col-lg-8 d-flex flex-column">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header">
                            <img src="images/logo.png">
                            <h4>BUSINESS PERSONNEL DASHBOARD</h4>
                        </div>
                        <div class="card-body">
                            <!-- Search Form -->
                            <div class="row">
                                <div class="col-md-7">
                                    <form action="" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="text" name="Lastname"
                                                value="<?php if (isset($_GET['Lastname']))
                                                    echo $_GET['Lastname']; ?>"
                                                class="form-control" placeholder="Last Name">
                                            <input type="text" name="Firstname"
                                                value="<?php if (isset($_GET['Firstname']))
                                                    echo $_GET['Firstname']; ?>"
                                                class="form-control" placeholder="First Name">
                                            <button type="submit" class="btn button-search form-control">
                                                Search</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Recorded Data Table -->
                                <div class="table-con">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Lastname</th>
                                                <th>Firstname</th>
                                                <th>Middlename</th>
                                                <th>Birthdate</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php include "function.php"; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- Second section -->
            <section id="section-2" class="col-lg-4 d-flex flex-column">
                <div class="container-fluid py-5">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="logout p-1 text-decoration-none" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa-solid fa-right-from-bracket px-1"></i> Logout
                        </a>
                    </div>
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="text-center">
                            <img src="images/calendar.png" style="width: 320px" class="mb-3">
                            <p>Here is where you can print certificates for clients who attended the seminar.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="content">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">LOG OUT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to logout?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" onclick="redirectToAnotherPage()">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script/function.js"></script>
    <script src="https://cdn.jsdelivr.net/"></script>
</body>

</html>