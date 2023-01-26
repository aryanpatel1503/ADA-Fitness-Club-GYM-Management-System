<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>ADA dashboard
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>




    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/logo2.png" class="img-fluid" /><span>ADA Fitness Club</span></h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="index.html" class="dashboard"><i
                            class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>

                <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                    </li>
                </div>


                <li class="active">
                    <a href="Manage_User.php">
                        <i class="material-icons">person</i><span>Manage User</span></a>
                </li>

                <li class="dropdown">
                    <a href="Manage_Product.php">
                        <i class="material-icons">equalizer</i>
                        <span>Manage Product</span></a>
                </li>
                <li class="dropdown">
                    <a href="Manage_Order.php">
                        <i class="material-icons">shopping_cart</i><span>Manage Order</span></a>
                </li>

                <li class="dropdown">
                    <a href="Feedback.php">
                        <i class="material-icons">border_color</i><span>Feedback</span></a>
                </li>



                <li class="dropdown">
                    <a href="Report.php">
                        <i class="material-icons">grid_on</i><span>Report</span></a>
                </li>

                <li class="">
                    <a href="../index.php"><i class="material-icons">date_range</i><span>Logout</span></a>
                </li>

            </ul>

        </nav>



        <!-- Page Content  -->
        <div id="content" style="height: 100vh;">

            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <a class="navbar-brand" href="#"> Dashboard </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none"
                            id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="main-content">


                <?php
require 'dbcon.php';
?>

                <!-- Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">



                <div class="container mt-5">

                    <?php 
        include('Message.php'); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>User Edit
                                        <a href="Manage_User.php" class="btn btn-danger float-end">BACK</a>
                                    </h4>
                                </div>
                                <div class="card-body">

                                    <?php
                        if(isset($_GET['user_id']))
                        {
                            $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
                            $query = "SELECT * FROM user_reg WHERE user_id='$user_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="student_id" value="<?= $student['user_id']; ?>">

                                        <div class="mb-3">
                                            <label>Username</label>
                                            <input type="text" name="username" value="<?=$student['username'];?>"
                                                class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Fullname</label>
                                            <input type="text" name="fname" value="<?=$student['fullname'];?>"
                                                class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Email</label>
                                            <input type="email" name="email" value="<?=$student['email'];?>"
                                                class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="<?=$student['phone'];?>"
                                                class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Password</label>
                                            <input type="password" name="password" value="<?=$student['password'];?>"
                                                class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Confirm Password</label>
                                            <input type="password" name="c_password"
                                                value="<?=$student['c_password'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>User Type</label>
                                            <input type="text" name="user_type" value="<?=$student['user_type'];?>"
                                                class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="update_student" class="btn btn-primary">
                                                Update User
                                            </button>
                                        </div>

                                    </form>
                                    <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $('#content').toggleClass('active');
        });

        $('.more-button,.body-overlay').on('click', function() {
            $('#sidebar,.body-overlay').toggleClass('show-nav');
        });

    });
    </script>

</body>

</html>