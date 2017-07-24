<?php
/**
 * Created by PhpStorm.
 * User: bullhead
 * Date: 7/24/17
 * Time: 4:49 PM
 */
include ('login.html');
if (isset($_GET['username'])){
    echo "<h1>username is set</h1>";
    header("Location:mainpage.php");
}