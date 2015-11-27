<!DOCTYPE html>
<?php
require '../../Models/menuItem.php';
$id = null;
if (!empty(filter_input(INPUT_GET, 'Id'))) {
    $id = filter_input(INPUT_GET, 'Id');
}

if (null == $id) {
    header("Location: index.php");
}
$item = new MenuItem();

if (!empty($_POST)) {
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
        $orderError = 'Vul 0 of een volgorde getal in.';
        $valid = false;
    }
    // update data
    if ($valid) {
        $item->EditItem($id, $item->name, $item->order);
    }
} else {
    $data = $item->getItem($id);
    $item->name = $data['Name'];
    $item->order = $data['Order'];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
            Wijzig menu-item: <?php echo!empty($item->name) ? $item->name : ''; ?>
        </h1>
        <form method="POST" action="Edit.php?Id=<?php echo $id ?>">
            <label>
                Naam:
            </label>
            <input type="text" name="name" value="<?php echo!empty($item->name) ? $item->name : ''; ?>" >
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
            <input type="text" name="order"  placeholder="Volgorde getal" value="<?php echo!empty($item->order) ? $item->order : ''; ?>">
            <br>
            <input type="submit" value="Wijzig" name="submit">
        </form>

    </body>
</html>
