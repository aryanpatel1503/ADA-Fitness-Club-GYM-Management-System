<?php
session_start();
$con=mysqli_connect("localhost","root","","ada");

if (!$con) {
    die("can't connect. Connection Error: " . mysqli_connect_errno() . " " . mysqli_connect_error());
}
else{



if(isset($_POST['confirm'])){
    $username = $_POST['username'];
    $phone=$_POST['phone'];
    $c_trainer=$_POST['c_trainer'];

    $useriD = ($_SESSION['user_Id']);
    $iduser = (int)$useriD;

    $query="insert into add_trainer values(0,'$username','$phone','$c_trainer',$iduser)";
    $result = mysqli_query($con,$query);

    if ($result) {
        echo "<script>alert('Trainer added successfully');
                window.location.href = 'Add_Trainer.php';
            </script>";  
    }
    else{
        echo "<script>alert('Trainer not added');
                window.location.href = 'add_trainer_form.php';
            </script>";  
    }
}

}
?>