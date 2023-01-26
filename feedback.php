<?php
    session_start();
    // include("conn.php");

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ada";
    $con = mysqli_connect($host, $user, $pass, $db);

    if(!$con){
        die("can't connect connection error: ".mysqli_connect_error(). "".mysqli_connect_error());
    }
    else{

    
    // if(isset($_POST['Submit'])) {

        $email = $_POST['email'];
        $feedback = $_POST['feedback'];
        $useriD = ($_SESSION['user_Id']);
        $iduser = (int)$useriD;

        $query = "insert into feedback_tbl VALUES (0,'$email','$feedback',$iduser)";
        $result = mysqli_query($con, $query); 

        if($result)
        { 
            echo "<script>alert('Record inserted successfully');
                window.location.href = 'http://localhost/ADA/index.php';
            </script>";  
            // header('Location: ' . $_SERVER['HTTP_REFERER']);
            // header('Location: index.html');
        }   
        else
        {
            echo "Record not inserted <br>";
            echo "error no is:".mysqli_errno($con)."Error is:".mysqli_error($con);
        }
        
        mysqli_close($con);

    }
    // }

?>