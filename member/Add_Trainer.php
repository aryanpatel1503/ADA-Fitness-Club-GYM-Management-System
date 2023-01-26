<?php
    session_start();
    if (isset($_SESSION['user_name'])) {
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Trainer</title>
    <link rel="stylesheet" href="../style.css">
    <!-- <link rel="stylesheet" href="/bootstarp/css/bootstrap.min.css"> -->
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
                <!-- me-auto mb-2 mb-lg-0 ms-auto -->
                <ul class="navbar-nav me-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active rounded" aria-current="page" href="Member_Page.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link link dropdown-toggle rounded" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" id="activenav"> Services</a>
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


    <!-- first section -->

    <section class="" id="trainerfirstsection">

        <div class="img-fluid" id="img" style=" ">
            <div class="align-center container-fluid">
                <div class="row justify-content-end">
                    <div class="col-12 col-lg-6 text-center" id="desc">
                        <h1 class=" mb-3 display-1"> <strong>Add a Trainer</strong> </h1>
                        <!-- <p class=" display-5 "><strong>Supplement Products</strong> </p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- second section -->
    <section class="" id="trainersecondsection">

        <div class="main-content">
            <?php
                    require '../conn.php';
                ?>

            <div class="container mt-4">

                <!-- <php include('Message.php'); ?> -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h2>Trainer Details</h2>
                                <table class="table table-bordered table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th>Fullname</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                $query = "SELECT * FROM user_reg where user_type='Trainer' order by user_id asc";
                                $query = mysqli_query($con, $query);

                                if(mysqli_num_rows($query) > 0)
                                {
                                    foreach($query as $row)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $row['fullname']; ?></td>
                                            <td><?= $row['phone']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td class="text-center"><a
                                                    href="add_trainer_form.php?user_id=<php echo $rows['user_id']; ?>"
                                                    class="btn display-4 text-white">Add Now</a></td>
                                            <!-- <td><= $row['user_type']; ?></td> -->

                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "<h5> No Record Found </h5>";
                                }
                            ?>

                                    </tbody>
                                </table>

                            </div>
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

    <!-- <script src="/bootstarp/js/bootstrap.min.js"></script> -->
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