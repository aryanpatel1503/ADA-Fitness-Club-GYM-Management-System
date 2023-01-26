<?php
    session_start();
    $con=mysqli_connect("localhost","root","","ada");

    if (!$con) {
        die("can't connect. Connection Error: " . mysqli_connect_errno() . " " . mysqli_connect_error());
    }
    else{
        
        if(isset($_POST['confirm'])){
            $name = $_POST['name'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            
            $useriD = ($_SESSION['user_Id']);
            $iduser = (int)$useriD;

            $pid = ($_SESSION['p_id']);
            $idp = (int)$pid;
            
            $query = "insert into order_tbl (name,address,city,state,phone,email,P_ID,user_id) values('$name','$address','$city','$state',$phone,'$email', $idp,$iduser)";
            $result = mysqli_query($con,$query);
            
            if ($result) {
                echo "<script>alert('Order placed successfully');
                window.location.href = 'product.php';
                
                </script>";  
            }
            else{
                echo "<script>alert('Order not placed');
                window.location.href = 'product.php';
                </script>";  
            }
        }
    }

?>
