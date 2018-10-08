<?php
    include_once 'header.php';
?>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Registreren</h2>
            <form class="signup-form" action="includes/signup.inc.php" method="POST">
                <input type="text" name="first" placeholder="Voornaam">
                <input type="text" name="last" placeholder="Achternaam">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="uid" placeholder="Gebruikersnaam">
                <input type="text" name="pwd" placeholder="Wachtwoord">
                <input type="text" name="postc" placeholder="Postcode">
                <input type="text" name="city" placeholder="Woonplaats">
                <button type="submit" name="submit">Registreer!</button>
            </form> 
        </div>
    </section>

<?php
    include_once 'footer.php';
?>
