<!DOCTYPE html>
<?php
require '../../Models/menuItem.php';
$id = 0;
$item = new MenuItem();
if (!empty(filter_input(INPUT_GET, 'Id'))) {
    $id = filter_input(INPUT_GET, 'Id');
}

if (!empty($_POST)) {
    $id = filter_input(INPUT_POST, 'id');
    $item->DeleteItem($id);
} else {
    $data = $item->getItem($id);
    $name = $data['Name'];
    $order = $data['Order'];
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Delete.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <p>Weet je zeker dat je het menu-item: "<?php echo $name; ?>" wilt verwijderen?</p>
            <div>
                <button type="submit">Ja</button>
                <a href="index.php">Nee</a>
            </div>
        </form>

    </body>
</html>