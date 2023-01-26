<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM user_reg WHERE user_id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        // $_SESSION['message'] = "Student Deleted Successfully";
        // header("Location: Manage_User.php");
        echo "<script>alert('Record Deleted successfully');
                window.location.href = 'Manage_User.php';
            </script>"; 
        exit(0);
    }
    else
    {
        // $_SESSION['message'] = "Student Not Deleted";
        // header("Location: Manage_User.php");
        echo "<script>alert('Record not Deleted');
                window.location.href = 'Manage_User.php';
            </script>"; 
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['username']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $c_password = mysqli_real_escape_string($con, $_POST['c_password']);
    $user_type = mysqli_real_escape_string($con, $_POST['user_type']);

    $query = "UPDATE user_reg SET username='$name', fullname='$fname', email='$email', phone='$phone', password='$password', c_password='$c_password', User_type='$user_type' WHERE user_id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        // $_SESSION['message'] = "User Updated Successfully";
        // header("Location: Manage_User.php");
        echo "<script>alert('User Updated successfully');
                window.location.href = 'Manage_User.php';
            </script>"; 
        exit(0);
    }
    else
    {
        // $_SESSION['message'] = "User Not Updated";
        // header("Location: Manage_User.php");
        echo "<script>alert('User Not Updated');
                window.location.href = 'User-Edit.php';
            </script>"; 
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['username']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $c_password = mysqli_real_escape_string($con, $_POST['c_password']);
    $user_type = mysqli_real_escape_string($con, $_POST['user_type']);

    $query = "INSERT INTO user_reg (username,fullname,email,phone,password,c_password,user_type) VALUES ('$name','$fname','$email','$phone','$password','$c_password','$user_type')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        // $_SESSION['message'] = "User Created Successfully";
        // header("Location: Manage_User.php");
        echo "<script>alert('User Created Successfully');
                window.location.href = 'Manage_User.php';
            </script>"; 
        exit(0);
    }
    else
    {
        // $_SESSION['message'] = "User Not Created";
        // header("Location: Add_User.php");
        echo "<script>alert('User Not Created');
                window.location.href = 'Add_User.php';
            </script>"; 
        exit(0);
    }
}

?>