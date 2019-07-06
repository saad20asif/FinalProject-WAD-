
<header>
    <script>
        function checkSearch(str) {
            if (str.length == 0) {
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("content").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "check_Search.php?search=" + str, true);
                xmlhttp.send();
            }
        }
    </script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <a class="navbar-brand"> <span style="color:green;"> Guitar</span> Paradise</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="list navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About us</a>
                </li>
                <?php
                if(!!(isset($_SESSION['L_email'])))
                {
                    echo "<li class='nav-item'>
                        <a class='nav-link' href='login.php'>Log in</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='register.php'>Register</a>
                    </li>";
                }
                else {
                    echo "<li class='nav-item'>
                            <a class='nav-link' href='logout.php'>Log out</a>
                        </li>";

                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo @$_GET['name']?></a>
                </li>
            </ul>
            <form class="form-check-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search guitar"
                       aria-label="Search" onkeyup="checkSearch(this.value)">

                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="ml-3"> <i class="cart fas fa-cart-plus"><span id="add">0</span></i></div>
    </nav>
</header>