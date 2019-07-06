<?php
//if(!isset($_SESSION['user_email'])){
//    header('location: ../login.php?not_admin=You are not Admin!');
//}
    require_once "../server/db_connection.php";
if(isset($_POST["Create_product"])) {



$title = $_POST["dre_title"];
$brand = $_POST["dre_brand"];
$cat = $_POST["dre_cat"];
$price = $_POST["dre_price"];
$key = $_POST["dre_key"];


    if (!preg_match("/[a-z|A-Z|0-9\s]+/",$title)) {
        echo "wrong name";
    }
    if (!preg_match("/[0-9]+.?[0-9]+/",$price)) {
        echo "wrong name";
    }
    if (!preg_match("/[a-z|A-Z|0-9\s]+/",$key)) {
        echo "wrong name";
    } else {

    $img = $_FILES['dre_img']['name'];
    $img_temp = $_FILES['dre_img']['tmp_name'];

    move_uploaded_file($img_temp, "Images/$img");

    $create = "insert into guitar_product (guitar_cat, guitar_brand, guitar_price,guitar_image,guitar_keyword,guitar_title)
                                   value ('$cat','$brand','$price','$img','$key','$title')";

    $ref = mysqli_query($con, $create);
    if ($ref) {
        header("location: admin_page.php?insert_product");
    }

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert guitar</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/customcss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>
<body>
<div class="container">
    <h1 class="text-center my-5"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Create New </span> guitar </h1>
    <form action="Create_product.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div style="margin-top: 3px" class="col-lg-2 col-md-4 col-sm-6 ">
                <label for="pro_title" class="d-none d-md-inline d-lg-inline d-sm-inline"> <span class="d-sm-none d-md-inline"> guitar </span> Title:</label>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="input-group">
                    <input id="regex"  pattern="[a-z|A-Z|0-9\s]+" type="text" class="form-control" id="dre_title" name="dre_title" placeholder="Enter guitar Title" >
                </div>
            </div>
            <div style="margin-top: 3px" class="col-lg-2 col-md-4 col-sm-6 ">
                <label for="pro_title" class="d-none d-md-inline d-lg-inline d-sm-inline"> <span class="d-sm-none d-md-inline"> guitar </span> Brand:</label>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="input-group">
                    <select class="form-control" id="dre_brand" name="dre_brand">
                        <option>Select Brands</option>
                        <?php
                        $brand = "select * from guitar_brands";
                        $result = mysqli_query($con,$brand);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $B_title = $row['brands_title'];
                            $B_id = $row['brands_Id'];
                            echo "<option value='$B_id'>$B_title</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class=" row my-3">
            <div style="margin-top: 3px" class="col-lg-2 col-md-4 col-sm-6 ">
                <label for="pro_title" class="d-none d-md-inline d-lg-inline d-sm-inline"> <span class="d-sm-none d-md-inline"> guitar </span> Category:</label>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="input-group">
                    <select class="form-control" id="dre_cat" name="dre_cat">
                        <option>Select Category</option>
                        <?php
                            $cat = "select * from guitar_categories";
                            $result = mysqli_query($con,$cat);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $cat_title = $row['cat_title'];
                                $cat_id = $row['cat_Id'];
                                echo "<option value='$cat_id'>$cat_title</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div style="margin-top: 3px" class="col-lg-2 col-md-4 col-sm-6 ">
                <label for="pro_title" class="d-none d-md-inline d-lg-inline d-sm-inline"> <span class="d-sm-none d-md-inline"> guitar </span> Price:</label>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="input-group">
                    <input id="regex"  pattern="[0-9]+.?[0-9]+" type="text" class="form-control"  name="dre_price" placeholder="Enter guitar Price" >
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div style="margin-top: 3px" class="col-lg-2 col-md-4 col-sm-6 ">
                <label for="pro_title" class="d-none d-md-inline d-lg-inline d-sm-inline"> <span class="d-sm-none d-md-inline"> guitar </span> Image:</label>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="input-group">
                    <input type="file" class="form-control"  name="dre_img" >
                </div>
            </div>
            <div style="margin-top: 3px" class="col-lg-2 col-md-4 col-sm-6 ">
                <label for="pro_title" class="d-none d-md-inline d-lg-inline d-sm-inline"> <span class="d-sm-none d-md-inline"> guitar </span> Keyword:</label>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="input-group">
                    <input id="regex"  pattern="[a-z|A-Z|0-9\s]+" type="text" class="form-control"  name="dre_key" placeholder="Enter guitar Keywords" >
                </div>
            </div>
        </div>

        <div id="submit" class="col-lg-3 col-md-4 col-sm-6">
            <div class="">
                <button type="submit" name="Create_product" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Product </button> <br>
            </div>
        </div>
    </form>
</div>
</body>
</html>

