<?php
require "libs/rb.php";
R::setup('mysql:host=localhost;dbname=comments', 'root', '');
$con = mysqli_connect('localhost', 'root', '', 'comments');
?>