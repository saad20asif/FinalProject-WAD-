<?php
$cfg['ExecTimeLimit'] = 6000;
$con = mysqli_connect("localhost","root","","music");
if(!$con)
    die("Connection failed");