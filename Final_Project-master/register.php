<?php
include "server/Functions.php";
include "server/db_connection.php";

include "templates/header.php";
global $con;
//if(isset($_POST['submit'])) {
////getting text data from the fields
//
//    $email = $_POST['email'];
//    $password = $_POST['psw'];
//
//    $register_user = "insert into login (L_id, L_email,L_password)
//                  VALUES ('$email','$password');";
//
//    $insert_user = mysqli_query($con, $register_user);
//    if ($insert_user) {
//        header("location: " . $_SERVER['PHP_SELF']);
//    }
//
//}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <link rel="stylesheet" href="CSS/bootstrap.css" >
    <link rel="stylesheet" href="CSS/customcss.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        function checkEmail(str) {
            if (str.length == 0) {
                document.getElementById("hint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("hint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "check_email.php?e=" + str, true);
                xmlhttp.send();
                //document.getElementById('hint').innerHTML = 'loading...';
            }
        }
    </script>

</head>
<body>
<?php


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd1 = $_POST['psw'];
    $pwd2 = $_POST['psw-repeat'];

    if (!preg_match("/[^0-9][a-zA-Z0-9\s][^0-9]+/",$name)) {
        echo "wrong name";
    }
    if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/",$email)) {
        echo "wrong name";
    }
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$pwd1)) {
        echo "wrong name";
    }
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$pwd2)) {
        echo "wrong name";
    }
    if($pwd1 == $pwd2)
    {
        $register = "insert into register (Uname,Uemail,Upass) VALUE ('$name','$email','$pwd1')";
        $send = mysqli_query($con,$register);
        $login = "insert into login (L_email,L_password) VALUE ('$email','$pwd1')";
        $send2 = mysqli_query($con,$login);
        if($send)
        {
            header("location: register.php?reg");
        }
    }
}


?>

<div class="regis">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <form method="post">
        <label><b>Name</b></label>
        <input   id="regex"
                 pattern="[^0-9][a-zA-Z0-9\s][^0-9]+" type="text" placeholder="Enter name" name="name"  required>
        <label><b>Email</b></label>
        <input id="regex" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" type="text" placeholder="Enter Email"
               name="email" required onkeyup="checkEmail(this.value)">
        <span class="text-danger" id="hint"></span>


        <label><b>Password</b></label>
        <input type="password"  id="regex" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Enter Password" name="psw" required>

        <label><b>Repeat Password</b></label>
        <input type="password" id="regex" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Repeat Password" name="psw-repeat" required>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" name="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
    </form>
</div>
<?php
include "templates/footer.php";
?>
</body>
</html>
