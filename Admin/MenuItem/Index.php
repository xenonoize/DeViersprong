<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
<!--                    <th>
                        Id
                    </th>-->
                    <th>
                        Naam
                    </th>
                    <th>
                        Volgorde
                    </th>
                    <th colspan='2'>
                        <a href='Create.php'>Nieuw menu-item</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../Models/database.php';
                $pdo = Database::connect();
                $sql = 'SELECT * FROM menuitem ORDER BY Id';
                foreach ($pdo->query($sql) as $row) {
                    echo '<tr>';
                    // echo '<td>' . $row['Id'] . '</td>';
                    echo '<td>' . $row['Name'] . '</td>';
                    echo '<td>' . $row['Order'] . '</td>';
                    echo '<td><button>Wijzig</button>';
                    echo '<td><button>Verwijder</button>';
                    echo '</tr>';
                }
                Database::disconnect();
                ?>
            </tbody>
        </table>


    </body>
</html>
