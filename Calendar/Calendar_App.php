<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="css/Calendar.css">
    <link rel="stylesheet" href="css/Appointment.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="calendar">
            <div class="month">
                <i class="fas fa-angle-left prev"></i>
                <div class="date">
                    <h1> </h1>
                    <p> </p>
                </div>
                <i class="fas fa-angle-right next"></i>
            </div>
            <div class="col-md-5">
                <!-- Button trigger modal -->
                <button type="button" class="btn button-add" data-bs-toggle="modal" data-bs-target="#myModal">
                    Add
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
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
                                            <input type="text" id="nameF" name="Firstname" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group col">
                                            <label for="nameM">Middlename:</label>
                                            <input type="text" id="nameM" name="Middlename" class="form-control">
                                        </div>

                                        <div class="form-group col">
                                            <label for="birthdate">Birthdate:</label>
                                            <input type="date" id="birthdate" name="Birthdate" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <input type="submit" value="Submit" name="submit_button"
                                            class="btn btn-primary">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days" id="calendarDays">
            </div>
            <div class="popup" id="popup">
                <div class="popup-content">
                    <button type="button" id="view">View</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script/cal_script_App.js"></script>
    <script src="function.js"></script>
</body>

</html>