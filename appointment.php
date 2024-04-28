<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPOINTMENT DASHBOARD</title>
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
                        <img src="images/logo.png"><h4>APPOINTMENT DASHBOARD</h4>
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
            <!-- Second section -->
            <section id="section-2" class="col-lg-4 d-flex flex-column">
                <div class="container-fluid py-5">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="logout p-1 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-right-from-bracket px-1"></i> Logout
                        </a>
                    </div>
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="text-center">
                            <img src="images/calendar.png" style="width: 320px" class="mb-3">
                            <p>Please Use search for Existing Clients & Add for new Clients!, To Edit the Clients Detail. Please click view details and click update.</p>
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
    <script src="https://cdn.jsdelivr.net/"></script>
    <script src="script/function.js"></script>
</body>

</html>
