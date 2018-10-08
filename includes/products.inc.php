<?php

session_start();

include 'dbh.inc.php';

if (isset($_POST['diva'])) {

    $sql = "INSERT INTO orders (`id`, `userid`, `productname`) VALUES ('1', '". $_SESSION['u_id'] . "', 'Diva Plus');";
    mysqli_query($conn, $sql);
    header("Location: ../products.php?DivaPlus=besteld!");
    exit();
}

if (isset($_POST['wayz'])) {

    $sql = "INSERT INTO orders (`id`, `userid`, `productname`) VALUES ('2', '". $_SESSION['u_id'] . "', 'Wayz');";
    mysqli_query($conn, $sql);
    header("Location: ../products.php?Wayz=besteld!");
    exit();
}

if (isset($_POST['esprit'])) {

    $sql = "INSERT INTO orders (`id`, `userid`, `productname`) VALUES ('3', '". $_SESSION['u_id'] . "', 'Esprit C');";
    mysqli_query($conn, $sql);
    header("Location: ../products.php?EspritC=besteld!");
    exit();
}

if (isset($_POST['orange'])) {

    $sql = "INSERT INTO orders (`id`, `userid`, `productname`) VALUES ('4', '". $_SESSION['u_id'] . "', 'Orange C7+ HMB');";
    mysqli_query($conn, $sql);
    header("Location: ../products.php?OrangeC7+HMB=besteld!");
    exit();
}