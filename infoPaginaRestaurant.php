<!DOCTYPE html>
<!--
Erik Nugteren
S1090245
ICTm1i
2015 -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>infopagina</title>
        <link rel="stylesheet" href="css/stijlInfoPaginaRestaurant.css">
    </head>
    <body>
        <div id="header">
            De Viersprong
        </div>
        <div id="menu">
            <ul>
                <li>Home</li>
                <li>Agenda</li>
                <li>Reserveren</li>
                <li>Hagel en Donder</li>
                <li>Recensies</li>
                <li>Contact</li>
            </ul>
        </div>
        <div id="main">
            <div id="links">
                linkergedeelte<br><br><br><br><br><br>
            </div>
            <div id="rechts">

                <a href="https://www.facebook.com/restaurantdeviersprong/?fref=ts" target="_blank"><img src="data:image/png;base64,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" alt="facebook"></a>
            </div>
        </div>
        <div id="copyright">
            © de Viersprong 2015
        </div>
    </body>
</html>
