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
    <link rel="stylesheet" href="css/style.css">
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
                <li class="">
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



                <li class="active">
                    <a href="Report.php">
                        <i class="material-icons">grid_on</i><span>Report</span></a>
                
                </li>

                <li class="">
                    <a href="../index.php"><i class="material-icons">date_range</i><span>Logout</span></a>
                </li>

                <!-- <li class="">
                    <a href="#"><i class="material-icons">library_books</i><span>Calender</span></a>
                </li> -->


            </ul>


        </nav>



        <!-- Page Content  -->
        <div id="content" style="height: 100vh; background: white;">

            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <a class="navbar-brand" href="#"> Report </a>

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
                                        <!-- <php
                                                echo $_SESSION['user_name'];
                                            ?> -->
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="container" id="mproductcontainer">

                <h2 class="text-center">ADA Fitness Club</h2>
                <?php
                        $select = mysqli_query($con, "SELECT * FROM user_reg order by user_id asc");
                    ?>
                <div class="product-display">
                    <div>
                        <h4 class="text-center">User Details</h4>
                        <!-- <a href="" class="btn btn-primary float-end">Add Order </a> -->
                    </div>
                    <table class="product-display-table">

                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Fullname</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>User_type</th>
                                <!-- <th>Action</th> -->
                            </tr style="text-transform: initial;">
                        </thead>
                        <?php while($row = mysqli_fetch_assoc($select)){ ?>
                        <tr style="text-transform: initial;">
                            <td style="padding: 0;"><?php echo $row['username']; ?></td>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td style="padding: 0;"><?php echo $row['user_type']; ?></td>
                        
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>

            <hr>

            <div class="container" id="mproductcontainer">

                <?php
                        $select = mysqli_query($con, "SELECT * FROM product_tbl order by P_ID asc");
                    ?>
                <div class="product-display">
                    <div>
                        <h4 class="text-center">Products Details</h4>
                        <!-- <a href="" class="btn btn-primary float-end">Add Order </a> -->
                    </div>
                    <table class="product-display-table">

                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <?php while($row = mysqli_fetch_assoc($select)){ ?>
                        <tr style="text-transform: initial;">
                            <td><img src="uploaded_img/<?php echo $row['Img']; ?>" height="100" alt=""></td>
                            <td><?php echo $row['P_name']; ?></td>
                            <td><?php echo $row['Des']; ?></td>
                            <td style="padding: 0;">₹<?php echo $row['Price']; ?>/-</td>
                        
                        </tr>
                        <?php } ?>
                    </table>
                </div>

            </div>


            <hr>

            <div class="container" id="mproductcontainer">

                <?php
                        $select = mysqli_query($con, "SELECT * FROM order_tbl order by order_id asc");
                    ?>
                <div class="product-display">
                    <div>
                        <h4 class="text-center">Order Details</h4>
                    </div>
                    <table class="product-display-table">

                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <?php while($row = mysqli_fetch_assoc($select)){ ?>
                        <tr style="text-transform: initial;">
                            <td style="padding: 0;"><?php echo $row['name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['state']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>

                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>

            <hr>

            <div class="container" id="mproductcontainer">

                <?php
                        $select = mysqli_query($con, "SELECT * FROM plan_tbl order by plan_id asc");
                    ?>
                <div class="product-display">
                    <div>
                        <h4 class="text-center">Plan Details</h4>
                    </div>
                    <table class="product-display-table">

                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Plan Type</th>
                            </tr>
                        </thead>
                        <?php while($row = mysqli_fetch_assoc($select)){ ?>
                        <tr style="text-transform: initial;">
                            <td style="padding: 0;"><?php echo $row['plan_name']; ?></td>
                            <td><?php echo $row['plan_desc']; ?></td>
                            <td><?php echo $row['plan_type']; ?></td>

                        </tr>
                        <?php } ?>
                    </table>
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