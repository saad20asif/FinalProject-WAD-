<?php
session_start();
include "server/db_connection.php";
$error_msg = '';
global $con;
if(isset($_POST['submit'])) {
    $email = $_POST['L_email'];
    if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/", $email)) {
        // echo "wrong pattren";
    }
    $email = $_POST['L_email'];
    $pass = $_POST['L_password'];
    $sel_user = "select * from login where L_email='$email' AND L_password='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    $get_name = "select * from register where Uemail='$email' AND Upass='$pass'";
    $user = mysqli_query($con, $get_name);
    $row = mysqli_fetch_assoc($user);
    $user_name = $row['Uname'];
    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['L_email'] = $email;
//        echo $_SESSION['L_email'];
        if(!empty($_POST['remember'])) {
            setcookie('L_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('L_password', $pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('L_email','' );
            setcookie('L_password', '');
        }
        header('location:index.php?name='.$user_name);
    }
}
if(isset($_POST['admin'])) {
    $email = $_POST['L_email'];
    if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/", $email)) {
        // echo "wrong pattren";
    }
    $email = $_POST['L_email'];
    $pass = $_POST['L_password'];
    $sel_user = "select * from admin where a_email='$email' AND a_pass='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['a_email'] = $email;
//        echo $_SESSION['L_email'];
        if(!empty($_POST['remember'])) {
            setcookie('L_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('L_password', $pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('L_email','' );
            setcookie('L_password', '');
        }
        header('location:admin/admin_page.php?name='.$user_name);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/customcss.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>
<body>

<?php
include "templates/header.php";
?>
<section id="mid">
    <div id="Main-content" class=" container text-center">
        <h1>LOGIN</h1>
        <h4 id="msg2"><?php echo @$_GET['logged_out']?></h4>
        <h4 id="msg"><?php echo $error_msg ?></h4>
        <form method="post">
            <div class="user row ">
                <div class="form-group offset-lg-5 offset-md-4 offset-sm-4 offset-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input name="L_email" id="regex" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" type="email"  class="form-control" name="email"
                               value="<?php @$_COOKIE['L_email'] ?>" placeholder="email">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group offset-lg-5 offset-md-4 offset-sm-4 offset-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input name="L_password" id="regex" value="<?php @$_COOKIE['L_password'] ?>" style="margin: 0" type="password" class="form-control"  placeholder="Password">
                    </div>
                </div>
            </div>
            <div>
                <label id="rem"> <input type="radio" value="re" name="remember" >Remember me</label>
            </div>
            <div>
                <button style="max-width: 27%" type="submit" class="btn btn-success" name="submit">Sign in</button><br>
                <button style="max-width: 27%" type="submit" class="btn btn-success" name="admin">Admin</button>
            </div>
        </form><br>
        <div id="for">
            <a href="forget_pw.php">Forget Password?</a>
        </div>
    </div>
</section>
<?php
include "templates/footer.php";
?>
</body>
</html>