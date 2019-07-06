<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/customcss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <title>Forget Password</title>
</head>
<body>
<?php
include "templates/header.php";
?>
<section id="forget">
    <div class="backe">
        <div class="fort container text-center">
            <p>
                Create a new Strong password,that you don't use for other websites.
            </p>
            <div class="fpass form-group offset-lg-4 offset-md-4 offset-sm-4 offset-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                    </div>
                    <input   class="form-control"  placeholder="new password"
                           id="regex" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                </div>
            </div>
            <div class="fpass form-group offset-lg-4 offset-md-4 offset-sm-4 offset-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                    </div>
                    <input  class="form-control"  placeholder=" confirm password"
                           id="regex" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                </div>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</section>
<?php
include "templates/footer.php";
?>
</body>
</html>