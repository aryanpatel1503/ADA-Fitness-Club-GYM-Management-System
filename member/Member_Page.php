<?php
    session_start();
    if (isset($_SESSION['user_name'])) {
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    <style>
    .navbar #navbarSupportedContent ul {
        margin-left: auto;
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top" id="top_nav">
        <div class="container-fluid ">
            <a class="navbar-brand" id="top_navlink" href="#">
                <img src="../Images/logo.png" alt="ADA Fitness Club Logo" width="90px" class="img-fluid ms-2">
                <p class="text-center mb-0 " id="logoname" style="font-family: 'Baloo Bhai 2', cursive !important;">
                    Fitness Club</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active rounded" id="activenav" aria-current="page"
                            href="Member_Page.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link link dropdown-toggle rounded" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> Services</a>
                        <div class="dropdown-menu dropdownlist">
                            <a class="dropdown-item rounded dropdownnav" href="diet.php">Diet Plan</a>
                            <a class="dropdown-item rounded dropdownnav" href="workout.php">Workout Plan</a>
                            <a class="dropdown-item rounded dropdownnav" href="Add_Trainer.php">Add a Trainer</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link rounded" href="product.php">Products </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded" href="aboutus.php">About Us</a>
                    </li>

                    <li class="nav-item dropdown">
                    </li>
                </ul>

                <i class="bi bi-person-circle bi-2x" style="font-size: 34px; margin-right: 12px; color: #2eb19a;"></i>
                <a class="text-dark text-decoration-none" style="font-size: 27px; margin-right: 57px; color: #2eb19a;">
                    <?php
                        echo $_SESSION['user_name'];
                    ?>
                </a>
                <a href="../logout.php" class="btn btn-danger">Logout</a>

            </div>

        </div>
    </nav>





    <!-- First Section -->
    <section id="firstsection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div id="bgimg" class="img-fluid ">

                        <div class="row">
                            <div class="col-lg-5">

                                <div class="d-flex align-items-center  " id="bgdesc">
                                    <p class="bgpara">Build <span>Your Body </span> </p>
                                    <p class="bgpara align-left" id="bgpara2">Transform Your Life. </p>
                                    <a class="btn btn-primary btnlink" href="Member_Page.php#features">Our services</a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Second Section -->
    <section class="header5 cid-soGg5QDbH5" id="secondsection">

        <div class="container-fluid">
            <div class="row justify-content-center " id="outerdiv">
                <div class="col-12 col-lg-9 d-flex align-items-center " id="innerdiv">
                    <h1 class=" text-white mb-3 firstheading"><strong>About ADA fitness club</strong></h1>
                    <div class=" mt-3"><a class="btn btn-success btnlink" href="aboutus.php">View more</a></div>
                </div>
            </div>
        </div>
    </section>





    <!-- features-->
    <section class="features" id="features">

        <div class="container ">
            <div class="row section-head ">
                <div class="col-12 ">
                    <h4 class=" mb-0  text-center firstheading" id=""><strong>Our
                            Services</strong></h4>
                    <h5 class="mb-0 mt-2 text-center secondheading" id="">From basic Diet Plans
                        and Workout Plans, we offer everything</h5>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card-wrapper mb-3">
                        <div class="card-box align-left">
                            <h4 class="card-title align-left thirdheading"><strong>Diet Plans</strong></h4>
                            <p class=" mb-3 firstpara">
                                Planning diets refers to determining what usual nutrient intake should be.
                                Regardless of whether one is planning diets for individuals or groups,
                                the goal is to have diets that are nutritionally adequate, or conversely,
                                to ensure that the probability of nutrient inadequacy or excess is acceptably low.
                            </p>
                            <div class="link-wrap">
                                <h6 class="link align-left "><a class="text-success text-primary readmore"
                                        href="diet.php">&nbsp;Read more &gt;</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card-wrapper mb-3">
                        <div class="card-box align-left">
                            <h4 class="card-title  align-left thirdheading"><strong>Workout Plans</strong></h4>
                            <p class=" mb-3 firstpara">
                                An exercise plan is essentially a 'roadmap' that clearly identifies for the client the
                                steps they'll need to take to reach their desired destination.
                                Research has shown that goal setting greatly increases the chances of adherence and the
                                achievement of outcomes.
                            </p>
                            <div class="link-wrap">
                                <h6 class="link  align-left "><a class="text-success text-primary readmore"
                                        href="workout.php">&nbsp;Read more &gt;</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <footer class="footer text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <h5><i class="fa fa-road"></i> ADA Fitness Club</h5>
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-unstyled pb-4">
                                <li><a href="Member_Page.php">Home</a></li>
                                <li><a href="diet.php">Services</a></li>
                                <li><a href="product.php">Products</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">
                    <h5 class="text-md-right text-center ">Feedback Form</h5>
                    <hr>
                </div>
                <div class="col-md-6">
                    <form action="feedback.php" method="post">
                        <input type="hidden" name="userID" value="var_value">
                        <fieldset class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                placeholder="Enter email" required>
                        </fieldset>
                        <fieldset class="form-group">
                            <textarea class="form-control" id="exampleMessage" name="feedback"
                                placeholder="Enter Your Feedback" required></textarea>
                        </fieldset>
                        <fieldset class="form-group text-xs-right">
                            <button type="submit" name="Submit" class="btn btn-secondary-outline btn-lg">Send</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center" id="footercopyright">
            &copy; copyright ADA Fitness Club All rights reserved!
        </div>
    </footer>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
    $(document).ready(function() {
        $(".dropdown").hover(function() {
            var dropdownMenu = $(this).children(".dropdown-menu");
            if (dropdownMenu.is(":visible")) {
                dropdownMenu.parent().toggleClass("open");
            }
        });
    });
    </script>
</body>

</html>

<?php
    }
  
else{
    echo "<script>
                window.location.href = 'http://localhost/ADA/login/login.php';
            </script>";  
}
?>