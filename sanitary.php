<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sanitary.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Sanitary Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm custom-bg-color">
        <div class="container-fluid px-5">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand px-4" href="#">
                    <img src="images/logo.png" width="40" height="40" alt="">
                </a>
                <div class="">
                    <a href="#" class="logout p-1 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-right-from-bracket px-1"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-flex flex-column vh-100 d-flex mx-auto" style="width: 150%;">
        <div class="row flex-grow-1">
            <!-- Sidebar -->
            <div class="sidebar">
                <a href="#" id="sanitary-link"><i class="fa-solid fa-user-tie text-decoration-none"></i> Sanitary</a>
                <a href="#" id="appointment-link"><i class="fa-regular fa-calendar-check text-decoration-none"></i> Appointment</a>
                <a href="#" id="business-link"><i class="fa-solid fa-business-time text-decoration-none"></i> Business</a>
            </div>
            <!-- Main Content -->
            <div class="col-lg-8">
                <section id="section-1" class="mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h4>SANITARY INSPECTOR DASHBOARD</h4>
                        </div>
                        <div class="card-body">
                            <!-- Search Form -->
                            <div class="row">
                                <div class="col-md-7">
                                    <form action="" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="text" name="Lastname"
                                                value="<?php if (isset($_GET['Lastname'])) echo $_GET['Lastname']; ?>"
                                                class="form-control" placeholder="Last Name">
                                            <input type="text" name="Firstname"
                                                value="<?php if (isset($_GET['Firstname'])) echo $_GET['Firstname']; ?>"
                                                class="form-control" placeholder="First Name">
                                            <button type="submit" class="btn button-search form-control"> Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Table -->
                            <div class="table-responsive table-con">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Middlename</th>
                                            <th>Birthdate</th>
                                            <th>Details</th>
                                            <th>Check</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include "client_info_San.php"; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- --------------section-1.1----------- -->
            <section id="section-1.1" class="col-lg-8 d-flex flex-column">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h4>APPOINTMENT DASHBOARD</h4>
                        </div>
                        <div class="card-body">
                            <!-- Search Form -->
                            <div class="row">
                                <div class="col-md-7">
                                    <form action="" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="text" name="Lastname"
                                                value="<?php if (isset($_GET['Lastname'])) echo $_GET['Lastname']; ?>"
                                                class="form-control" placeholder="Last Name">
                                            <input type="text" name="Firstname"
                                                value="<?php if (isset($_GET['Firstname'])) echo $_GET['Firstname']; ?>"
                                                class="form-control" placeholder="First Name">
                                            <button type="submit" class="btn button-search form-control"> Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-5">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn button-add" data-bs-toggle="modal" data-bs-target="#myModal">
                                        Add
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content rounded">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                                                </div>
                                                
                                                <div class="modal-body custom-modal-body">
                                                    <form action="function.php" method="post" class="modal-table">
                                                        <div class="form-row">
                                                            <div class="form-group col">
                                                                <label for="nameL">Lastname:</label>
                                                                <input type="text" id="nameL" name="Lastname" class="form-control" required>
                                                            </div>
                                                            
                                                            <div class="form-group col">
                                                                <label for="nameF">Firstname:</label>
                                                                <input type="text" id="nameF" name="Firstname" class="form-control" required>
                                                            </div>
                                                            
                                                            <div class="form-group col">
                                                                <label for="nameM">Middlename:</label>
                                                                <input type="text" id="nameM" name="Middlename" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group col">
                                                                <label for="birthdate">Birthdate:</label>
                                                                <input type="date" id="birthdate" name="Birthdate" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <input type="submit" value="Submit" name="submit_button" class="btn btn-primary">
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                            <th>Client Details</th>
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
            <!-- --------------section-1.2----------- -->
            <section id="section-1.2" class="col-lg-8 d-flex flex-column">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header">
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
            <!-- --------------section-2----------- -->
            <!-- <section id="section-2" class="col-lg-4">
                <div class="container-fluid py-5">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="text-center">
                            <img src="images/calendar.png" style="width: 320px" class="mb-3">
                            <p>Here is the Sanitary Dashboard where you can mark clients as present or absent.</p>
                        </div>
                    </div>
                </div>
            </section> -->
        </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/"></script>
    <script src="script/function.js"></script>
</body>
</html>
