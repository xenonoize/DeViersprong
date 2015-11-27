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
                include '../../Models/menuItem.php';
                $items = new MenuItem();
                $menuItems = $items->getAllItems();
                foreach ($menuItems as $item) {
                    echo '<tr>';
                    echo '<td>' . $item['Name'] . '</td>';
                    echo '<td>' . $item['Order'] . '</td>';
                    echo '<td><a  href="Edit.php?Id=' . $item['Id'] . '">Wijzig</a></td>';
                    echo '<td><a  href="Delete.php?Id=' . $item['Id'] . '">Verwijder</a></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>


    </body>
</html>
