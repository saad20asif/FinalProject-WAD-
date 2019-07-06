<?php

require "../server/Functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>


<body>
<?php include ('admin_header.php')?>
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3 style="font-size: 30px; color: darkgoldenrod;"> <b>Admin Panel</b></h3>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="admin_page.php?insert_product">
                    <i class="fas fa-plus"></i> Insert New Product
                </a>
            </li>
            <li>
                <a href="admin_page.php?view_products">
                    <i class="fas fa-sitemap"></i> View All Products
                </a>
            </li>
            <li>
                <a href="admin_page.php?insert_category">
                    <i class="fas fa-plus"></i> Insert New Category
                </a>
            </li>
            <li>
                <a href="admin_page.php?view_categories">
                    <i class="fas fa-band-aid"></i> View All Categories
                </a>
            </li>
            <li>
                <a href="admin_page.php?insert_brand">
                    <i class="fas fa-plus"></i> Insert New Brand
                </a>
            </li>
            <li>
                <a href="admin_page.php?view_brands">
                    <i class="fas fa-toolbox"></i> View All Brands</a>
            </li>
            <li>
                <a href="admin_page.php?del_pro">
                    <i class="fas fa-toolbox"></i> Delete Product</a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-sign-out-alt"></i> Admin logout</a>
            </li>
        </ul>
    </nav>
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        <div class="container">
            <?php
                if(isset($_GET['insert_product'])){
                    include ('Create_product.php');
                }
                else if(isset($_GET['view_products'])){
                    include ('view_pro.php');
                }
                else if(isset($_GET['insert_category'])){
                    include ('Create_category.php');
                }
                else if(isset($_GET['del_pro'])){
                    include ('Delete_product.php');
                }
                else if(isset($_GET['insert_brand'])){
                    include ('Create_brand.php');
                }
                else if(isset($_GET['insert_brand'])){
                    include ('Create_brand.php');
                }
                else if(isset($_GET['view_categories'])){
                 $cat = "select * from guitar_categories";
                 $result = mysqli_query($con,$cat);
                 echo "<h1> Categories</h1>";
                 while ($row = mysqli_fetch_assoc($result)) {
                                $cat_title = $row['cat_title'];
                                $cat_id = $row['cat_Id'];
                                echo "<h4>$cat_title</h4>";
                 }
                }
                else if(isset($_GET['view_brands'])){
                            $brand = "select * from guitar_brands";
                            $result = mysqli_query($con,$brand);
                          while ($row = mysqli_fetch_assoc($result)) {
                              $B_title = $row['brands_title'];
                              $B_id = $row['brands_Id'];
                              echo "<h4>$B_title</h4>";
                          }
                }
                ?>
        </div>
    </div>
</div>
<?php include ('../templates/footer.php')?>
</body>
</html>