<?php
include("../db/db.php");

$login = $_GET['login'];
$passworld = $_GET['passworld'];
$count = mysqli_query($connection, "SELECT * FROM `project_prob` WHERE `passworld` = '$passworld' AND `log`= '$login'");
if (mysqli_num_rows($count) == 0) {
} else {
    header('Location: ../index.php');
}
