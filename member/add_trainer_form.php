<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
    .form-group {
        display: flex;
        flex-direction: column;

    }
    .form-group select{
        padding: 6px;

    }
    </style>
</head>

<body>

    <section class="features17 cid-soGgzUblo8" id="features18-3">

        <div class="container" style="margin-top: 112px;">
            <div class="mbr-section-head">
                <div class="col-12">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-3 text-center"
                        style="font-size: 50px; font-weight: 700;">Trainer Summary</h4>
                </div>
            </div>
            <div class="container" style="max-width: 1105px;">
                <div class="row">
                    <div class="col-md-12 center">
                        <div class="card" style="border: 0" ;>
                            <div class="card-body">
                                <form action="add_trainer_code.php" method="POST" enctype="multipart/form-data">
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
                                                    <center>Add Trainer</center>
                                                </b></h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row justify-content-center">
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
                                            <h3><b>Member Information</b></h3>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <!-- <input type="hidden" name="product_id" value="<php echo $_GET['P_ID']; ?>"> -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-2">Username</label>
                                                <input type="text" name="username" class="form-control"
                                                    placeholder="Enter your Username" required>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="mb-2">Phone No.</label>
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Enter your Phone No." required>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="mb-2">Choose Trainer</label>
                                                <select name="c_trainer" id="">
                                                    <?php
                                                        include('../conn.php');

                                                        $query = "select * from user_reg where user_type = 'Trainer'";
                                                        $result = mysqli_query($con, $query);

                                                        while ($row = mysqli_fetch_row($result)) {
                                                            ?>
                                                    <option value="<?php echo $row[1]; ?>"> <?php echo $row[1]; ?> </option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row" style="margin: 27px;">
                                        <div class="col">
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center " id="buttonorder">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <a href="Add_Trainer.php"
                                                    style="padding: 9.6px 115px; background-color: #ff5500; border-color: #ff5500; width: 343px;"
                                                    name="exit" class="btn btn-danger btn-block" id="firstbtn">Cancel
                                                    Trainer</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <!-- onclick="window.print()"  -->
                                                <button type="submit"
                                                    style="padding: 9.6px 115px; background-color: #16bdd3; border-color: #16bdd3; width: 343px;"
                                                    name="confirm" class="btn btn-success btn-block"
                                                    id="secondbtn">Confirm Trainer</button>
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