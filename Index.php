<!DOCTYPE html>
<?php
// Include database class
include '/classes/config.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $database = new Database();

        $database->query('SELECT locatie FROM afdeling WHERE locatie = :loc');
        $database->bind(':loc', 'LEIDEN');
        $rows = $database->resultset();

        echo "<pre>";
        print_r($row);
        echo "</pre>";
        ?>
    </body>
</html>
