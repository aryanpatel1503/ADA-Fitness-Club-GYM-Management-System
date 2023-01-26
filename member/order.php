<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <meta name="description" content="">
    <title>Order details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../style1.css">
</head>

<body>

    <section class="features17 cid-soGgzUblo8" id="features18-3">
        <?php
        session_start();

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "ada";
        $mysqli = new mysqli($host, $user, $pass, $db);

        if ($mysqli->connect_error) {
            die('Connect Error (' .
                $mysqli->connect_errno . ') ' .
                $mysqli->connect_error);
        }
        else{
            $id = $_GET['P_ID'];
            $_SESSION['p_id'] = $id;
            // $useriD = ($_SESSION['user_Id']);
            // $iduser = (int)$useriD;

            $sql = "SELECT * FROM product_tbl WHERE P_ID='$id' ";
            $result = $mysqli->query($sql);
        }

        ?>

        <div class="container">
            <div class="mbr-section-head">
                <div class="col-12">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-3 text-center"
                        style="font-size: 50px; font-weight: 700;">Order
                        Summary</h4>
                </div>
            </div>
            <div class="container" style="max-width: 1105px;">
                <div class="row">
                    <div class="col-md-12 center">
                        <div class="card" style="border: 0" ;>
                            <div class="card-body">
                                <form action="confirm.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3><b>
                                                    <center>Order Details</center>
                                                </b></h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <?php while ($rows = $result->fetch_assoc()) { ?>

                                            <div class="row justify-content-center">
                                                <div class="col-md-2"><img src="../Images/<?php echo $rows['Img']; ?>"
                                                        height="100" width="100px"></div>
                                                <div class="col-md-8 align-center">
                                                    <h5 class="text-center"><b><?php echo $rows['P_name']; ?></b></h5>

                                                </div>
                                                <div class="col-md-2">
                                                    <h5><b><?php echo "₹" . $rows['Price']; ?></b></h5>
                                                </div>

                                            </div>
                                            <?php } ?>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3><b>Shipping Information</b></h3>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <input type="hidden" name="product_id" value="<?php echo $_GET['P_ID']; ?>">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-2">Ship to name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="mb-2">Address</label>
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Address" required>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="mb-2">City</label>
                                                <input type="text" name="city" class="form-control" placeholder="City"
                                                    required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-2">State</label>
                                                <input type="text" name="state" class="form-control" placeholder="State"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-2">Phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="Phone"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-2">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email" required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col">
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3><b>Payment Info</b></h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h5><b style="color: mediumseagreen;">Cash On Delivery</b></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3><b>Billing Info</b></h3>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col">
                                            <h5 style="color: mediumseagreen;"><b>Total :</b>
                                                <?php
                                                $sql = "SELECT * FROM product_tbl WHERE P_ID='$id' ";
                                                $result = $mysqli->query($sql);
                                                while ($rows = $result->fetch_array()) { ?>
                                                <b><?php echo "₹" . $rows['Price']; ?> </b>
                                                <?php }
                                                $mysqli->close(); ?>
                                            </h5>




                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center " id="buttonorder">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <a href="product.php"
                                                    style="padding: 9.6px 115px; background-color: #ff5500; border-color: #ff5500;"
                                                    name="exit" class="btn btn-danger btn-block" id="firstbtn">Cancel
                                                    Order</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <!-- onclick="window.print()"  -->
                                                <button type="submit"
                                                    style="padding: 9.6px 115px; background-color: #16bdd3; border-color: #16bdd3;"
                                                    name="confirm" class="btn btn-success btn-block"
                                                    id="secondbtn">Confirm Order</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </section>
</body>

</html>