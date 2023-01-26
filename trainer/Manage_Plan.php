<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>ADA dashboard
    </title>

    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
                    <a href="trainer_login.php" class="dashboard"><i
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
                    <a href="Manage_Plan.php">
                        <i class="material-icons">aspect_ratio</i><span>Manage Plan</span></a>
                </li>

                <li class="dropdown">
                    <a href="View_Member.php">
                        <i class="material-icons">person</i>
                        <span>View Member</span></a>
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

if(isset($_POST['add_plan'])){

$plan_name = $_POST['plan_name'];
$plan_desc = $_POST['plan_desc'];
$plan_type = $_POST['plan_type'];


if(empty($plan_name) || empty($plan_desc) || empty($plan_type)){
    $message[] = 'please fill out all';
}else{
    $insert = "INSERT INTO plan_tbl(plan_name,plan_desc,plan_type) VALUES('$plan_name', '$plan_desc', '$plan_type')";
    $upload = mysqli_query($con,$insert);
    if($upload){

    echo "<script>alert('New Plan added successfully');
                window.location.href = 'Manage_Plan.php';
            </script>";  
    }else{
        echo "<script>alert('Plan Not added');
                window.location.href = 'Manage_Plan.php';
            </script>";  
    }
}

};

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM plan_tbl WHERE plan_id = $id");
//    header("Location: Manage_Prodcut.php");
    echo "<script>alert('Plan Deleted Successfully');
    window.location.href = 'Manage_Plan.php';
    </script>";  
};

?>


            <?php

if(isset($message)){
foreach($message as $message){
    echo '<span class="message">'.$message.'</span>';
}
}

?>

            <div class="container" id="mproductcontainer">

                <div class="admin-product-form-container">

                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                        <h3>Add a new plan</h3>

                        <input type="text" placeholder="enter plan name" name="plan_name" class="box">
                        <input type="text" placeholder="enter plan Description" name="plan_desc" class="box">
                        <input type="text" placeholder="enter plan type" name="plan_type" class="box">
                        <input type="submit" class="btn" name="add_plan" value="Add Plan">
                    </form>

                </div>

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
                                <th>plan id</th>
                                <th>plan name</th>
                                <th>plan Description</th>
                                <th>plan type</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <?php while($row = mysqli_fetch_assoc($select)){ ?>
                        <tr style="padding: 0; word-break: break-word;">
                            <td style="padding: 0; word-break: break-word; text-align: justify;">
                                <?php echo $row['plan_id']; ?></td>
                            <td style="padding: 0; word-break: break-word; text-align: justify;">
                                <?php echo $row['plan_name']; ?></td>
                            <td style="padding: 10px; word-break: break-word; text-align: justify;">
                                <?php echo $row['plan_desc']; ?></td>
                            <td style="padding: 0; word-break: break-word; text-align: center;">
                                <?php echo $row['plan_type']; ?></td>
                            <td>
                                <a href="Plan_Update.php?edit=<?php echo $row['plan_id']; ?>" id="firstbtn" class="btn">
                                    <i class="fas fa-edit"></i> Edit </a>
                                <a href="Manage_Plan.php?delete=<?php echo $row['plan_id']; ?>" class="btn"> <i
                                        class="fas fa-trash"></i> Delete </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
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