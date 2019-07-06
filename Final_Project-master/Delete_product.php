<?php
if(isset($_GET['del_pro'])){
    $del_id = $_GET['del_pro'];
    $del_pro = "delete from products where pro_id='$del_id'";
    $run_del = mysqli_query($con,$del_pro);
    if($run_del){
        header('location: admin_page');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Product</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/customcss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>
<body>
<?php
include "admin/admin_header.php";
?>

<div class="container">
    <h1 class="text-center my-5"><i class="fa fa-trash-alt"></i> <span class="d-none d-sm-inline"> Enter ID for Delete Product </span></h1>
    <form action="del_product.php" method="post">
        <div class="row">
            <div style="margin-top: 3px" class="col-lg-2 col-md-4 col-sm-6 ">
                <label for="pro_title" class="d-none d-md-inline d-lg-inline d-sm-inline"> <span class="d-sm-none d-md-inline"> Enter </span> ID:</label>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="input-group">
                    <input id="regex"  pattern="[0-9]+" type="text" class="form-control"  name="dre_Btitle" placeholder="Enter Product Id" >
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="">
                    <button type="submit" name="del_pro" class="btn btn-primary btn-block">Delete Product</button>
                </div>
            </div>
        </div>
    </form>
    <br>
    <br>
</div>
<?php
include "templates/footer.php";
?>
</body>
</html>