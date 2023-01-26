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
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins" id="login">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading" style="width: ;"></div>
                <div class="card-body">
                    <h2 class="title">LOGIN</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Username" name="username" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password"
                                required>
                        </div>
                        <!-- <div class="input-group" id="dropdownlist">
                            <label for="usertype" class="input--style-3">User Type</label> <br>
                            <select class="input--style-3 form-select bg-dark text-white " aria-label="Default select example" name="usertype" style="padding-right: 176px;"> -->
                        -->
                        <!-- <option class="text-white" id="dropdownoption" disabled selected>User Type</option>  -->
                        <!-- <option class="text-white" id="dropdownoption" value="1">Member</option>
                                <option class="text-white" id="dropdownoption"+ value="2">Trainer</option>
                            </select>
                        </div> -->

                        <div class="p-t-10">
                            <center> <button class="btn btn--pill btn--green" name="submit" type="submit" value="Login">
                                    LOGIN</button></center>
                        </div>

                        <?php

                            $host = "localhost";
                            $user = "root";
                            $pass = "";
                            $db = "ada";
                            $conn = mysqli_connect($host, $user, $pass, $db);

                            session_start();
                            // include("../conn.php");
                        
                        if(isset($_POST['submit'])){

                            if (!$conn) {
                                die("can't  connect. Connection Error: " . mysqli_connect_errno() . " " . mysqli_connect_error());
                            }
                            $username = $_POST['username'];
                            $password = $_POST['password'];
							// $c_password = $_POST['c_password'];
                            // $user_type = $_POST['user_type'];


                            $select = " SELECT * from user_reg where Username = '$username' && Password = '$password' ";
                            $result = mysqli_query($conn, $select); 

                            if(mysqli_num_rows($result) > 0){

                                $row = mysqli_fetch_array($result);

                                // echo $row[0];
                         
                                if($row['user_type'] == 'Member'){
                                    
                                    $_SESSION['user_name'] = $row['username'];
                                    $_SESSION['user_Id'] = $row['user_id'];
                                   header('location: ../member/Member_Page.php');
                                // echo "<script>
                                // window.location.href = '../member/Member_Page.php';
                                // </script>"; 
                          
                                }elseif($row['user_type'] == 'Trainer'){
                          
                                   $_SESSION['user_name'] = $row['username'];
                                   header('location: ../trainer/trainer_login.php');
                                }
                             }else{
                                // $error[] = 'incorrect email or password!';
                                echo "<p style='color:tomato;margin-top:20px;'>Invalid username or password</p>";
                             }
                          
                          }

                            // if ($result) {
                            //     header("Location: http://localhost/ADA/Member_Page.php");
                            // } else {
                            //     echo "<p style='color:tomato;margin-top:20px;'>Invalid username or password</p>";
                            // }
                            // mysqli_close($con);
                        
                        ?>

                    </form>
                    <p style="color: white;margin-top: 30px;">New user, click here to <a href="user_reg.php"
                            style="color: mediumseagreen;text-decoration: none;font-weight: bold;"> Register</a></p>
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