<?php

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $postc = mysqli_real_escape_string($conn, $_POST['postc']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    //Foutmeldingen
    //Check voor lege velden
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) || empty($postc) || empty($city) ) {
        header("Location: ../signup.php?signup=leeg");
        exit();
    } else {
        //Check of de input van de karakters waardig zijn
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: ../signup.php?signup=ongeldig");
        exit();
        } else {
            //Check of de email waardig is
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../signup.php?signup=email");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE username='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    header("Location: ../signup.php?signup=gebruikerbestaat");
                    exit();
                } else {
                    //Zet de gebruiker in de database
                    $sql = "INSERT INTO users (firstname, lastname, email, username, user_pwd, zipcode, city) VALUES ('$first', '$last', '$email', '$uid', '$pwd', '$postc', '$city');";
                    mysqli_query($conn, $sql);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }

        }
    }

} else {
    header("Location: ../signup.php");
    exit();
}