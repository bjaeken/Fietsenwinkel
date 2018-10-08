<?php
    include_once 'header.php';
?>

    <section class="main-container">
        <div class="main-wrapper">
            <h2>Producten</h2>
        </div>
        <div class="boxes">
            <div class="box">
                <div id="image1">
                </div>
                <h2>Diva Plus</h2>
                <p id="pdesc">Merk: Batavus</br>
                    Kleuren: groen, roze, wit</br>
                    Model: Dames / Lage instap</br>
                    Modeljaar: 2018</p>
                <div class="info">
                    <h3>Prijs:</h3>
                    <p>voor &euro;679</p>
                    <form id="formproduct" action="includes/products.inc.php" method="POST">
                        <button class="btn" type="submit" name="diva">Bestel!</button>
                    </form>
                </div>
            </div>
            <div class="box">
                <div id="image2">
                </div>
                <h2>Wayz</h2>
                <p id="pdesc">Merk: Batavus</br>
                        Kleuren: groen</br>
                        Model: Dames</br>
                        Modeljaar: 2018</p>
                    <div class="info">
                    <h3>Prijs:</h3>
                    <p>voor &euro;669</p>
                    <form id="formproduct" action="includes/products.inc.php" method="POST">
                        <button class="btn" type="submit" name="wayz">Bestel!</button>
                    </form>
                </div>
            </div>
            <div class="box">
                <div id="image3">
                </div>
                <h2>Esprit C</h2>
                <p id="pdesc">Merk: Gazelle</br>
                        Kleuren: Zwart</br>
                        Model: Heren</br>
                        Modeljaar: 2018</p>
                    <div class="info">
                    <h3>Prijs:</h3>
                    <p>voor &euro;359</p>
                    <form id="formproduct" action="includes/products.inc.php" method="POST">
                        <button class="btn" type="submit" name="esprit">Bestel!</button>
                    </form>
                </div>
            </div>
            <div class="box">
                <div id="image4">
                </div>
                <h2>Orange C7+ HMB</h2>
                <p id="pdesc">Merk: Gazelle</br>
                        Kleuren: Zwart</br>
                        Model: Heren</br>
                        Modeljaar: 2018</p>
                    <div class="info">
                    <h3>Prijs:</h3>
                    <p>voor &euro;1986</p>
                    <form id="formproduct" action="includes/products.inc.php" method="POST">
                        <button class="btn" type="submit" name="orange">Bestel!</button>
                    </form>
                </div>
            </div>
        </div>

    </section>


    <?php
    include_once 'footer.php';
?>