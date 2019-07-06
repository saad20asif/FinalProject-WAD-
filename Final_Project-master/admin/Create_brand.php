<?php



include "../server/db_connection.php";

if(isset($_POST["Create_brand"])) {

$brandtest = $_POST['dre_Btitle'];

if (!preg_match("/[^0-9][a-zA-Z0-9\s][^0-9]+/",$brandtest)) {
    echo "wrong name";
} else {

    $C_brand = $_POST["dre_Btitle"];
    $create = "insert into guitar_brands (brands_title) value ('$C_brand');";
    $ref = mysqli_query($con, $create);
    if ($ref) {
        header("location: admin_page.php?insert_brand");
    }

}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Brand</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/customcss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>
<body>
<div class="container">
    <h1 class="text-center my-5"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Create New </span> Brand</h1>
    <form action="Create_category.php" method="post">
        <div class="row">
            <div style="margin-top: 3px" class="col-lg-2 col-md-4 col-sm-6 ">
                <label for="pro_title" class="d-none d-md-inline d-lg-inline d-sm-inline"> <span class="d-sm-none d-md-inline"> Product </span> Brand:</label>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="input-group">
                    <input id="regex" pattern="[^0-9][a-zA-Z0-9\s][^0-9]+" type="text" class="form-control"  name="dre_Btitle" placeholder="Enter Brand Title" >
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="">
                    <button type="submit" name="Create_brand" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Brand </button>
                </div>
            </div>
        </div>
    </form>
    <br>
    <br>
</div>
</body>
</html>
