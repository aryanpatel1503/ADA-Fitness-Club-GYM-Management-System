<?php
    session_start();
    include('dbcon.php');
?>

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
                <li class="active">
                    <a href="#" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>

                <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><span>
                        </span></a>
                    </li>
                </div>


                <li class="dropdown">
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
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="">
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="main-content">

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <span class="material-icons">person</span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>User</strong></p>

                                    <?php
                                    $member="select * from user_reg";
                                    $member_run=mysqli_query($con,$member);

                                    if($member_total=mysqli_num_rows($member_run)){
                                        echo '<h3 class="card-title">'.$member_total.'</h3>';
                                    }
                                    else{
                                        echo '<h3 class="card-title">no data</h3>';
                                    }
                                    ?>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">
                                        equalizer
                                    </span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Product</strong></p>
                                <?php
                                    $member="select * from product_tbl";
                                    $member_run=mysqli_query($con,$member);

                                    if($member_total=mysqli_num_rows($member_run)){
                                        echo '<h3 class="card-title">'.$member_total.'</h3>';
                                    }
                                    else{
                                        echo '<h3 class="card-title">no data</h3>';
                                    }
                                    ?>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-rose">
                                    <span class="material-icons">shopping_cart</span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Orders</strong></p>
                                <?php
                                    $member="select * from order_tbl";
                                    $member_run=mysqli_query($con,$member);

                                    if($member_total=mysqli_num_rows($member_run)){
                                        echo '<h3 class="card-title">'.$member_total.'</h3>';
                                    }
                                    else{
                                        echo '<h3 class="card-title">no data</h3>';
                                    }
                                    ?>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-info">

                                    <span class="material-icons">
                                        follow_the_signs
                                    </span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Plans</strong></p>
                                <?php
                                    $member="select * from plan_tbl";
                                    $member_run=mysqli_query($con,$member);

                                    if($member_total=mysqli_num_rows($member_run)){
                                        echo '<h3 class="card-title">'.$member_total.'</h3>';
                                    }
                                    else{
                                        echo '<h3 class="card-title">no data</h3>';
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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