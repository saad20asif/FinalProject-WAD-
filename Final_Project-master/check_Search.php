<?php
/**
 * Created by PhpStorm.
 * User: AZ
 * Date: 31/01/2019
 * Time: 1:45 PM
 */


require "server/functions.php";

global $con;
$getProQuery = '';

if(!isset($_GET['search'])){
    $getProQuery = "select * from guitar_product order by RAND()";
}

else if(isset($_GET['search'])){
    $user_query = $_GET['search'];
    $getProQuery = "select * from guitar_product where guitar_title like '%$user_query%'";
}

$getProResult = mysqli_query($con,$getProQuery);
$count_pro = mysqli_num_rows($getProResult);


if($count_data == 0){
    echo "<h4>There is no data to read.</h4>";
}
while($row = mysqli_fetch_assoc($result)){
    $title = $row['guitar_title'];
    $price = $row['guitar_price'];
    $img = $row['guitar_image'];

    echo "<div class='col-sm-6 col-md-4 col-lg-3 text-center'>
                    <h5 class='text-capitalize'>$title</h5>
                    <img width='200px' height='220px' src='admin/Images/$img'>
                    <p> <b> Rs $price/-  </b> </p>
                    <a href='#' class='btn btn-info btn-sm'>Details</a>
                    <a href='#'>
                    <a href='register.php?regis' onclick='add();' class='btn btn-success btn-sm'>
                       <i class='fas fa-cart-plus'></i> Add to Cart
                    </a>
                    </a>
                </div>";
}