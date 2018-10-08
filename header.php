<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Producten</a></li>
                    <li><a href="over.php">Over ons</a></li>
                    <li><a href="werkplaats.php">Werkplaats</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php
                        if (isset($_SESSION['u_id'])) {  ?>
                        
                            <li class="Welkom">
                            Welkom,
                            <?php
                             echo $_SESSION['u_user'];
                            ?>
                            </li>
                        <?php    
                        }
                        ?>
                </ul>
                <div class="nav-login">
                    <?php
                        if (isset($_SESSION['u_id'])) {
                            echo '<form action="includes/logout.inc.php" method="POST">
                            <button type="submit" name="submit">Logout</button>
                             </form>';
                        } else {
                             echo '<form action="includes/login.inc.php" method="POST">
                            <input type="text" name="uid" placeholder="Gebruikersnaam">
                            <input type="password" name="pwd" placeholder="Wachtwoord">
                            <button type="submit" name="submit">Login</button>
                            </form>
                            <a href="signup.php">Registreren</a>';
                        }
                    ?>
                </div>
            </div>
        </nav>
    </header>