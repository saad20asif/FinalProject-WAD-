<?php
require "server/Functions.php";


$cookiename = "languagecookie";
$cookievalue = "eng";

setcookie($cookiename,$cookievalue,time() + (86400 * 30),"/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guitar Paradise</title>
    <link rel="stylesheet" href="CSS/bootstrap.css" >
    <link rel="stylesheet" href="CSS/customcss.css" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <script>
        function add() {
            var num = document.getElementById("add").innerText;
            var int = parseInt(num,10);
            int = int +1;
            document.getElementById("add").innerHTML = int;
        }
    </script>

</head>

<body>
<?php include "templates/header.php"; ?>

<div class="jumbotron">
    <h1>Buy Latest Stuff Onlline</h1>
    <p>One Place Where you can get best guitars.</p>
</div>


<div class="container" >
    <div id="content" class="row">

        <?php
        if(!isset($_COOKIE[$cookiename])){

        }else{
            $verify="success";
            //echo $verify;
        }
        read_data();
        ?>
    </div>
</div>
</body>

<br>
<!-- Footer -->
<?php
include "templates/footer.php";
?>
<!-- Footer -->

</html>