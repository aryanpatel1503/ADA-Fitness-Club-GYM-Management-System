<?php
    include('../conn.php');

    // $query = "SELECT * FROM product_tbl order by P_ID asc";

    $qurey = "SELECT * FROM order_tbl INNER JOIN user_reg ON order_tbl.user_id = user_reg.user_id)";

    $result = mysqli_query($con,$query);

    while ($rows = mysqli_fetch_assoc($result)){
        // echo $rows['P_name'];

         echo $rows['order_id'];
         echo $rows['username'];
    }
?>