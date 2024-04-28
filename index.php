<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="index.php" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgFufZlEZOh02QLDlbwB8Fn22Ixtt5KxDAP4ShuqQlqho3vbduuvfcVO3YXg_ovphDS3k&usqp=CAU">
                    <h1>Create Account</h1>
                    <span>Fill up your Name, password and Role.</span>
                    <input type="text" placeholder="Name" name="fullname" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <label for="role">Choose a Role: </label>
                    <select name="Role" id="role" required>
                        <option value="Appointment">Appointment</option>
                        <option value="Business">Business</option>
                        <option value="Sanitary Inspector">Sanitary Inspector</option>
                    </select> 
                    <button name="Sign_up">Sign Up</button>
            </form>
        </div>
<!-- --------------REGISTRATION------------- -->
        <?php
            require 'config.php';
            
            // Registration Section
            if(isset($_POST['Sign_up'])){
                $fullName = $_POST['fullname'];
                $password = $_POST['password'];
                $role = $_POST['Role'];
                $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$fullName'");
                if (mysqli_num_rows($duplicate) > 0){
                    echo "<script> alert('Username has Already Taken'); </script>";
                } else {
                    if ($password){
                        $query = "INSERT INTO users VALUES ('', '$fullName', '$password', '$role')";
                        mysqli_query($conn, $query);
                        echo "<script> alert('Registration Successful'); </script>";
                    }
                }
            }
        ?>
<!-- --------------LOGIN------------- -->
            <div class="form-container sign-in">
                <form class="" action="" method="post" autocomplete="off">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgFufZlEZOh02QLDlbwB8Fn22Ixtt5KxDAP4ShuqQlqho3vbduuvfcVO3YXg_ovphDS3k&usqp=CAU">
                    <h1>Sign In</h1>
                    <span></span>
                    <input name = Login_username type="text" placeholder="Username" required>
                    <input name = Login_password type="password" placeholder="Password" required>
                    <a href="#">Forgot Your Passowrd?</a>
                    <button name="Sign_In">Sign In</button>
                </form>
            </div>
        <?php
            if (isset($_POST["Sign_In"])){
                $Login_username = $_POST["Login_username"];
                $Login_password = $_POST["Login_password"];
                $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$Login_username'");
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    if($Login_password == $row["password"]){
                        $_SESSION["login"] = true;
                        $_SESSION["id"] = $row["id"];
                        
                        // Redirect based on role
                        switch($row["roles"]){
                            case "Appointment":
                                header("location: appointment.php");
                                exit();
                            case "Business":
                                header("location: business.php");
                                exit();
                            case "Sanitary Inspector":
                                header("location: sanitary.php");
                                exit();
                        }
                        
                    } else {
                        echo "<script> alert('Incorrect Password try again.'); </script>";
                    }
                } else {
                    echo "<script> alert('User not Registered'); </script>";
                }
            }
        ?>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Again!</h1>
                    <p>To Sign up, Please Fill up your chosen Name, Password and Role.</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome to the Seminar Scheduler</h1>
                    <p>To login, Please use your Registered Username and password.</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script/function.js"></script>
</body>
</html>