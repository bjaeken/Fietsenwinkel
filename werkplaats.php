<?php
    include_once 'header.php';
?>
<section class="main-container">
        <div class="main-wrapper">
            <h2>Werkplaats</h2>
        <div class="werkplaatstxt">
        <h3>FIETS-ONDERHOUD OP LOCATIE</h3>
        <p class="ptext">Door onze professioneel ingerichte nieuwe werkplaats kunnen wij uw fiets in topconditie houden. 
        Wij zijn altijd op de hoogte van de laatste technologische ontwikkelingen van o.a. Lefty, Shimano, Campagnolo, Rockshox en Sram. 
        Wij volgen dan ook vele cursussen om de absolute specialist van Amsterdam te blijven. Ook verzorgen wij carbon reparatie's.
        Onder deze pagina is een formulier die u kunt invullen om een afspraak te maken. Wij sturen binnen 2 werkdagen een e-mail 
    	terug om met u een afspraak te maken. Ontvangt u geen mail? Neem dan contact met ons op via het onderstaande telefoon nummer.
        <h3>Adres info</h3>
        <p class="pbottom">De Concurrent</br>
        Seinpoststraat 8</br>
        7766 BG Nunteren</br>
        Tel:0808-2001833</br>
        Mobiel: 06-93447567</br>
        </p>
        </div>
            <form class="signup-form" action="includes/werkplaats.inc.php" method="POST">
                <input type="text" name="voor" placeholder="Voornaam">
                <input type="text" name="achter" placeholder="Achternaam">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="text" name="postco" placeholder="Postcode">
                <input type="text" name="housnr" placeholder="Huisnummer">
                <input type="text" name="stad" placeholder="Woonplaats">
                <textarea placeholder="Uw bericht" rows="2" name="msg" cols="53"></textarea>
                <button type="submit" name="submit1">Verzenden!</button>
            </form> 
        </div>
</section>

<?php
    include_once 'footer.php';
?>