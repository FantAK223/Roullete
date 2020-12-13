<?php
    session_start();
    require_once('connection.php');
    if ($_SESSION['session_username']) {
        $username = $_SESSION['session_username'];
        if (isset($_POST['key'])) {
            $bet = $_POST['key'];
            $query = "SELECT balance FROM usertbl WHERE username = '$username' ";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $balance = mysqli_fetch_row($result);
            $newbalance = $balance[0] - $bet;
            $_SESSION['upbalance'] = $bet;
            $query = "UPDATE usertbl SET balance = $newbalance WHERE username = '$username' ";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            //header('Location:index.php');
        }
        else {
            echo "jopa1";
        }
    }
    else {
        echo "jopa2";
    }
?>