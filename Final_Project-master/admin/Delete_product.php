<?php
//if(!isset($_SESSION['user_email'])){
//    header('location: ../login.php?not_admin=You are not Admin!');
//}
require "../server/db_connection.php";
if(isset($_GET['del_pro'])){
    $del_id = $_GET['del_pro'];
    $del = "delete from guitar_product where guitar_Id='$del_id'";
    $run_del = mysqli_query($con,$del);
    if($run_del){
        echo $del;
        header('location: admin_page.php?view_products');
    }
}


