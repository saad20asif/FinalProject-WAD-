<?php
require_once "db_connection.php";

function read_data(){
    global $con;
    $data = "select * from guitar_product order by RAND()";
    $result = mysqli_query($con,$data);
    $count_data= mysqli_num_rows($result);
    if($count_data == 0){
        echo "<h4>There is no data to read.</h4>";
    }
    while($row = mysqli_fetch_assoc($result)){
        $title = $row['guitar_title'];
        $price = $row['guitar_price'];
        $img = $row['guitar_image'];

        echo "<div class='data col-sm-6 col-md-4 col-lg-3 text-center mb-3'>
                    <h5 class='text-capitalize'>$title</h5>
                    <img width='200px' height='220px' src='admin/Images/$img'>
                    <p> <b> Rs $price/-  </b> </p>
                    <a href='#' class='btn btn-info btn-sm mb-2'>Details</a>
                    <a href='#'>
                    <a href='#' onclick='add();' class='btn btn-success btn-sm mb-2'>
                       <i class='fas fa-cart-plus'></i> Add to Cart
                    </a>
                    </a>
                </div>";
    }
}
?>