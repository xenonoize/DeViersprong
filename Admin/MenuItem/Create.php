<!DOCTYPE html>
<?php
require '../../Models/menuItem.php';

if (!empty($_POST)) {
    $item = new MenuItem();

    // keep track validation errors
    $nameError = null;
    $orderError = null;

    // keep track post values
    $item->name = filter_input(INPUT_POST, 'name');
    $item->order = (int) filter_input(INPUT_POST, 'order');

    // validate input
    $valid = true;
    if (empty($item->name)) {
        $nameError = 'Vul een naam in.';
        $valid = false;
    }

    if (empty($item->order)) {
        $item->order = 0;
        $valid = false;
    }
    // insert data
    if ($valid) {
        $item->CreateItem($item->name, $item->order);
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
            Nieuw menu-item
        </h1>
        <form method="POST" action="Create.php">
            <label>
                Naam:
            </label>
            <input type="text" name="name" placeholder="Naam">
            <br>
            <label>
                <?php if (!empty($nameError)): ?>
                    <span style="color:red;"><?php echo $nameError; ?></span>
                    <br>
                <?php endif; ?>
            </label>
            <label>
                Volgorde:
            </label>
            <input type="number" name="order"  min="0" placeholder="Volgorde getal">
            <br>
            <input type="submit" value="Opslaan" name="submit">
        </form>

    </body>
</html>
