<!DOCTYPE html>
<!--
Erik Nugteren
S1090245
ICTm1i
2015 -->
<?php
$stukprijs = 2.50;
$btwprijs = number_format($stukprijs / 100 * 21, 2);
$stukprijs2 = number_format($stukprijs, 2);
if (isset($_GET["bestel"])) {
    if ($_GET["aantal"] != "") {
        $totaalprijs = $_GET["aantal"] * $stukprijs2;
        $totaalprijs2 = number_format($totaalprijs, 2);
    } else {
        $totaalprijs2 = ("U moet iets invullen in het veld 'Aantal'.");
    }
} else {
    $totaalprijs2 = 0;
    $_GET["aantal"] = 0;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>bestelFormulierH&D</title>
        <link rel="stylesheet" href="css/stijlBestelFormulierH&D.css">
    </head>
    <body>
        <div id="header">
            Bestelformulier Hagel & Donder
        </div>
        <div id="plaatje">
            <img src="http://www.deviersprong.info/pb/wp_948608b1/images/img3225246cb2a8a0aab4.jpg" height="400px">
        </div>
        <div id="bestelformulier">
            Welkom ....
            <br><br><br><br>
            <div id="AantalInvul">
                Aantal
                <form method="GET" action="bestelFormulierH&D.php">
                    <input type="text" name="aantal" value="<?php print ($_GET["aantal"]); ?>">
                    </div>
                    <br><br><br>
                    <div id="prijsgeg">
                        <table>
                            <tr><th>Aantal</th><th>product</th><th>Stukprijs</th><th>prijs</th></tr>
                            <tr><td><?php print ($_GET["aantal"]); ?></td><td>Hagel en Donder</td><td><?php print("€" . $stukprijs2); ?></td><td><?php print("€" . $totaalprijs2); ?></td></tr>
                            <tr><td></td><td></td><td>prijs exc. BTW</td><td><?php print ("€" . ($totaalprijs2 - $_GET["aantal"] * $btwprijs)); ?></td></tr>
                            <tr><td></td><td></td><td>BTW prijs</td><td><?php print ("€" . $_GET["aantal"] * $btwprijs); ?></td></tr>
                        </table>
                        Totaalprijs
                        <input type = "text" name = "totaalprijs" value = "<?php print ("€" . $totaalprijs2); ?>" readonly>
                    </div>
                    <br><br>
                    <div id="bevestigAnnuleer">
                        <input type="submit" name="annuleer" value="annuleer">
                        <input type = "submit" name = "bestel" value = "bestel">
                    </div>
            </div>
        </form>


        <div id = "copyright">
            © de Viersprong 2015
        </div>
</body>
</html>
