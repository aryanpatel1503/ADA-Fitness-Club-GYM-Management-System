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
                    <a href="index.php" class="dashboard"><i
                            class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>

                <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                    </li>
                </div>


                <li class="dropdown">
                    <a href="Manage_User.php">
                        <i class="material-icons">person</i><span>Manage User</span></a>
                </li>

                <li class=" active">
                    <a href="Manage_Product.php">
                        <i class="material-icons">equalizer</i><span>Manage Product</span></a>
                </li>
                <li class="dropdown">
                    <a href="Manage_Order.php">
                        <i class="material-icons">shopping_cart</i><span>Manage Order</span></a>
                </li>

                <li class="">
                    <a href="Feedback.php">
                        <i class="material-icons">border_color</i><span>Feedback</span></a>
                </li>

                <li class="">
                    <a href="Report.php">
                        <i class="material-icons">grid_on</i><span>Report</span></a>
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

                include 'dbcon.php';

                if(isset($_POST['add_product'])){

                $product_name = $_POST['product_name'];
                $product_price = $_POST['product_price'];
                $product_desc = $_POST['product_desc'];
                $product_image = $_FILES['product_image']['name'];
                $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
                $product_image_folder = 'uploaded_img/'.$product_image;

                if(empty($product_name) || empty($product_desc) || empty($product_price) || empty($product_image)){
                    $message[] = 'please fill out all';
                }else{
                    $insert = "INSERT INTO product_tbl(P_name,Des, Img, Price) VALUES('$product_name', '$product_desc', '$product_image','$product_price')";
                    $upload = mysqli_query($con,$insert);
                    if($upload){
                        move_uploaded_file($product_image_tmp_name, $product_image_folder);
                        // $message[] = 'new product added successfully';
                        echo "<script>alert('New Product added successfully');
                        window.location.href = 'Manage_Product.php';
                        </script>"; 
                    }else{
                        $message[] = 'could not add the product';
                    }
                }

                };

                if(isset($_GET['delete'])){
                $id = $_GET['delete'];
                mysqli_query($con, "DELETE FROM product_tbl WHERE P_ID = $id");
                echo "<script>alert('Product Deleted Successfully');
                window.location.href = 'Manage_Product.php';
                </script>";
                //    header("Location: Manage_Prodcut.php");
                echo "<script>alert('Record inserted successfully');
                
            </script>"; 

                };
                // else{
                    
                // }
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
                        <h3>Add a new product</h3>
                        <input type="text" placeholder="enter product name" name="product_name" class="box">
                        <input type="number" placeholder="enter product price" name="product_price" class="box">
                        <input type="text" placeholder="enter product Description" name="product_desc" class="box">
                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                        <input type="submit" class="btn" name="add_product" value="Add Product">
                    </form>

                </div>

                <?php
                        $select = mysqli_query($con, "SELECT * FROM product_tbl order by P_ID asc");
                    ?>
                <div class="product-display">
                    <div>
                        <h4 class="text-center">Products Details</h4>
                    </div>
                    <table class="product-display-table">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php while($row = mysqli_fetch_assoc($select)){ ?>
                        <tr style="text-transform: initial;">
                            <td style="padding: 0;"><?php echo $row['P_ID']; ?></td>
                            <td><img src="uploaded_img/<?php echo $row['Img']; ?>" height="100" alt=""></td>
                            <td><?php echo $row['P_name']; ?></td>
                            <td><?php echo $row['Des']; ?></td>
                            <td style="padding: 0;">₹<?php echo $row['Price']; ?>/-</td>
                            <td>
                                <a href="Product_Update.php?edit=<?php echo $row['P_ID']; ?>" id="firstbtn" class="btn">
                                    <i class="fas fa-edit"></i> Edit </a>
                                <a href="Manage_Product.php?delete=<?php echo $row['P_ID']; ?>" class="btn"> <i
                                        class="fas fa-trash"></i> Delete </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
</body>

</html>

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