<?php

if (isset($_POST['submit1'])) {

    include_once 'dbh.inc.php';

    $firstn = mysqli_real_escape_string($conn, $_POST['voor']);
    $lastn = mysqli_real_escape_string($conn, $_POST['achter']);
    $email = mysqli_real_escape_string($conn, $_POST['mail']);
    $postc = mysqli_real_escape_string($conn, $_POST['postco']);
    $housen = mysqli_real_escape_string($conn, $_POST['housnr']);
    $city = mysqli_real_escape_string($conn, $_POST['stad']);
    $message = mysqli_real_escape_string($conn, $_POST['msg']);

    //Foutmeldingen
    //Check voor lege velden
    if (empty($firstn) || empty($lastn) || empty($email) || empty($postc) || empty($housen) || empty($city) || empty($message)) {
        header("Location: ../werkplaats.php?formulier=leeg");
        exit();
    } else {
        //Check of de input van de karakters waardig zijn
        if (!preg_match("/^[a-zA-Z]*$/", $firstn) || !preg_match("/^[a-zA-Z]*$/", $lastn)) {
        header("Location: ../werkplaats.php?formulier=ongeldig");
        exit();
        } else {
                 //Check of de email waardig is
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../werkplaats.php?formulier=email");
                exit();
                } else {
                $sql = "INSERT INTO werkplaats (naam, achternaam, email, postcode, huisnummer, plaats, bericht) VALUES ('$firstn', '$lastn', '$email', '$postc', '$housen', '$city', '$message');";
                    mysqli_query($conn, $sql);
                    header("Location: ../werkplaats.php?verzoek=verzonden");
                    exit();
                }
            }
        }
    }
          
 else {
    header("Location: ../werkplaats.php");
    exit();
}