<?php
    session_start();
    require_once('connection.php');
    if ($_SESSION['session_username']) {
        $username = $_SESSION['session_username'];
        $up = $_SESSION['upbalance'];
        $up*=14;
        $query = "SELECT balance FROM usertbl WHERE username = '$username' ";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $balance = mysqli_fetch_row($result);
        $newbalance = $balance[0] + $up;
        $query = "UPDATE usertbl SET balance = $newbalance WHERE username = '$username' ";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
    }
?>