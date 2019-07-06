<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact us</title>
    <link rel="stylesheet" href="CSS/bootstrap.css" >
    <link rel="stylesheet" href="CSS/customcss.css" >

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include "templates/header.php";


if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];


    if (!preg_match("/[^0-9][a-zA-Z0-9\s][^0-9]+/", $name)) {
        echo "wrong name";
    }
    if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/", $email)) {
        echo "wrong name";
    }
    if (!preg_match("/*/", $subject)) {
        echo "wrong name";
    }

}
?>

<div id="pic"  class="container">
    <div class="row">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1" style="color: white">Name</label>
                <input  id="regex" pattern="[^0-9][a-zA-Z0-9\s][^0-9]+" class="form-control" id="exampleFormControlInput1" name="name" placeholder="saad">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1" style="color: white">Email adguitar</label>
                <input  id="regex" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" class="form-control" name="email" id="exampleFormControlInput2" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1" style="color: white">Subject</label>
                <input  id="regex" pattern="*" name="subject" class="form-control" id="exampleFormControlInput3" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" style="color: white">Message</label>
                <textarea id="regex" pattern="*" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
    </div>
</div>


<div class="topic">
    <b> Contact </b>
    <div style="font-size: 20px"> Phone no: 0302 - 4089448</div>
    <div style="font-size: 20px"> Email: saad20asif@gmail.com</div>
</div>

<?php include 'templates/footer.php';?>

</body>
</html>