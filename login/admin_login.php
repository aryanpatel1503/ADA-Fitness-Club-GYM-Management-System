<?php
    session_start();
?>

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
    <title>Login form</title>

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
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins" id="admin">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">ADMIN LOGIN</h2>
                    <form action="" method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Username" name="username" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password"
                                required>
                        </div>

                        <div class="p-t-10">
                            <center> <button class="btn btn--pill btn--green" name="submit" type="submit" value="Login">
                                    LOGIN</button></center>
                        </div>

                        <?php

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
                            $password = $_POST['password'];


                            $query = mysqli_query($con, "SELECT id from admin_login where username='$username' and password='$password'");
                            $result = mysqli_fetch_array($query);

                            
                            if ($result > 0) {
                                $_SESSION['user_name'] = $result['username'];
                                header("Location: http://localhost/ADA/admin/index.php");
                            } else {
                                echo "<p style='color:tomato;margin-top:20px;'>Invalid username or password</p>";
                            }

                            
                            mysqli_close($con);
                        }
                        ?>

                    </form>
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

</body>

</html>
<!-- end document-->