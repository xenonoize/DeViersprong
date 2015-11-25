<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
$array = array(
    'Home' => 1,
    'Agenda' => 2,
    'Webshop' => 3,
    'Contact' => 4
    
);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <td>ID</td>
                <td>Naam</td>
                <td>Volgorde</td>
            </tr>
            <?php
            foreach($array as $key => $value)
            {
                echo ('<tr><td></td><td>'.$key.'</td><td>'.$value.'</td><td>Modify</td><td>Delete</td></tr>');
            }
            ?>
        </table>
    </body>
</html>
