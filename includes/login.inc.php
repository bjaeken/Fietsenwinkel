<?php

session_start();

if (isset($_POST['submit'])) {

    include 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Foutmeldingen
    //Check of de velden leeg zijn
    if (empty($uid) || empty($pwd)) {
        header("Location: ../index.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../index.php?login=error1");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                
                if ($row['user_pwd'] != $pwd) {
                    header("Location: ../index.php?login=error");
                    exit();
                } else{
                    //Log de gebruiker hier in
                    $_SESSION['u_id'] = $row['id'];
                    $_SESSION['u_naam'] = $row['firstname'];
                    $_SESSION['u_achter'] = $row['lastname'];
                    $_SESSION['u_mail'] = $row['email'];
                    $_SESSION['u_user'] = $row['username'];
                    $_SESSION['u_zipcode'] = $row['zipcode'];
                    $_SESSION['u_city'] = $row['city']; 
                   
                    header("Location: ../index.php?login=succes");
                    exit();
                }
            }
        }
    }
} else {

    header("Location: ../index.php?login=error");
    exit();
}