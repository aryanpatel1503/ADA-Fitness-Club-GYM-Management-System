<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>ADA Dashboard
    </title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
                    <a href="index.html" class="dashboard"><i
                            class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>

                <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">person</i><span>user</span></a>
                    </li>

                </div>

                <li class="active">
                    <a href="Manage_Product.php">
                        <i class="material-icons">person</i>


                        <span>Manage Product</span></a>
                    
                </li>
                <li class="dropdown">
                    <a href="View_Member.php">
                        <i class="material-icons">extension</i><span>View Member</span></a>
                </li>

                <li class="">
                    <a href="../index.php"><i class="material-icons">date_range</i><span>Logout</span></a>
                </li>

            </ul>
        </nav>



        <!-- Page Content  -->
        <div id="content" style="background: white;">

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


            <?php

               @include 'dbcon.php';

               $id = $_GET['edit'];

               if(isset($_POST['update_plan'])){

                  $plan_name = $_POST['plan_name'];
                  $plan_desc = $_POST['plan_desc'];
                  $plan_type = $_POST['plan_type'];
                  if(empty($plan_name) || empty($plan_desc) || empty($plan_type)){
                     $message[] = 'please fill out all!';    
                  }else{

                     $update_data = "UPDATE plan_tbl SET plan_name='$plan_name', plan_desc='$plan_desc', plan_type='$plan_type'  WHERE plan_id = '$id'";
                     $upload = mysqli_query($con, $update_data);

                     if($upload){
                        echo "<script>alert('Plan Updated successfully');
                        window.location.href = 'Manage_Plan.php';
                        </script>";  
                     }else{
                        echo "<script>alert('Plan Not Updated');
                            window.location.href = 'Plan_Update.php';
                        </script>";  
                     }

                  }
               };

               ?>


            <?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

            <div class="container" id="productupdate">
                <div class="admin-product-form-container centered">

                    <?php
      
      $select = mysqli_query($con, "SELECT * FROM plan_tbl WHERE plan_id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>

                    <form action="" method="post" enctype="multipart/form-data">
                        <h3 class="title">update the plan</h3>
                        <input type="text" class="box" name="plan_name" value="<?php echo $row['plan_name']; ?>"
                            placeholder="enter the product name">
                        <input type="text" min="0" class="box" name="plan_desc" value="<?php echo $row['plan_desc']; ?>"
                            placeholder="enter the product price">
                        <input type="text" placeholder="enter product Description"
                            value="<?php echo $row['plan_type']; ?>" name="plan_type" class="box">
                        <input type="submit" value="update plan" name="update_plan" class="btn">
                        <a href="Manage_Plan.php" class="btn">go back!</a>
                    </form>

                    <?php }; ?>

                </div>

            </div>

        </div>

    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/ADA1/ADA/admin/admin/admin/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/ADA1/ADA/admin/admin/admin/js/popper.min.js"></script>
    <script src="/ADA1/ADA/admin/admin/admin/js/bootstrap.min.js"></script>
    <script src="/ADA1/ADA/admin/admin/admin/js/jquery-3.3.1.min.js"></script>


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