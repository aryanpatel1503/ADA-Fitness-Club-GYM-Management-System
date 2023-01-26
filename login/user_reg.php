<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration form</title>

    <!-- Bootstrap --> 
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    <style>
        .success-message {
            color: green
        }

        .error-message {
            color: red;
        }
    </style>

</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins" id="reg">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">User Registration</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Username" name="username" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Full Name" name="fname" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" id="password"
                                name="password" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 " type="password" placeholder="Confirm password"
                                id="confirmpassword" name="c_password" required>
                        </div>
                        <div class="form-text confirm-message " style="margin-top: -31px; "> </div> <!--  margin-bottom: 22px; -->


                        <div class="input-group" id="dropdownlist" style="padding-top: 0; margin-top: 42px;">
                            <label for="usertype" class="input--style-3 ">User Type</label> <br>
                            <select class="input--style-3 form-select bg-dark text-white "
                                aria-label="Default select example" style="padding-right: 162px; margin-top: 5px;"
                                name="user_type">
                                <!-- <option class="text-white" id="dropdownoption" disabled selected>User Type</option>  -->
                                <option class="text-white" id="dropdownoption" value="Member" selected>Member</option>
                                <option class="text-white" id="dropdownoption" value="Trainer">Trainer</option>
                            </select>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" name="submit" type="submit">Submit</button>
                        </div>

                        <?php
                        // include("../conn.php");

                        if (isset($_POST['submit'])) {

                            $host = "localhost";
                            $user = "root";
                            $pass = "";
                            $db = "ada";
                            $con = mysqli_connect($host, $user, $pass, $db);

                            if (!$con) {
                                die("can't connect. Connection Error: " . mysqli_connect_errno() . " " . mysqli_connect_error());
                            }

                            $username = $_POST['username'];
                            $fullname = $_POST['fname'];
                            $phone = $_POST['phone'];
							$email = $_POST['email'];
                			$password = $_POST['password'];
							$c_password = $_POST['c_password'];
                            $user_type = $_POST['user_type'];

                            $select = mysqli_query($con, "SELECT * FROM user_reg WHERE Username = '". $username."'"); 
                            if(mysqli_num_rows($select)) {
                                echo "<script>alert('Username already exist please use different one.');</script>";
                                // exit('This username already exists'); 
                            }

                            else{


								$query = "INSERT INTO user_reg (username, fullname, phone, email, password, c_password, user_type) VALUES 
								('$username','$fullname',$phone,'$email','$password','$c_password','$user_type')";
								$result = mysqli_query($con, $query);

								if (!$result) {
									die('Error: ' . mysqli_error($con));
								} else {
                                    // echo "<p style='color:green;margin-top:20px;'>Registration successfull.</p>";
                                    // header("Location: login.php");
                                    echo "<script>alert('Registration successfull.');
                                        window.location.href = 'login.php';
                                    </script>";
									
								}
							}
                            mysqli_close($con);
                        }
                        ?>

                    </form>
                    <p style="color: white;margin-top: 30px;">Already user? <a href="login.php"
                            style="color: mediumseagreen;text-decoration: none;font-weight: bold;"> Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $('#password, #confirmpassword').on('keyup', function() {

        $('.confirm-message').removeClass('success-message').removeClass('error-message');

        let password = $('#password').val();
        let confirm_password = $('#confirmpassword').val();

        if (confirm_password === password) {
            $('.confirm-message').text('Password Match!').addClass('success-message');
        } else {
            $('.confirm-message').text("Password Doesn't Match!").addClass('error-message');
        }

    });
    </script>
</body>

</html>
<!-- end document -->