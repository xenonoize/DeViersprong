<!DOCTYPE html>
<?php
require '../../Models/database.php';

if (!empty($_POST)) {
    // keep track validation errors
    $nameError = null;
    $orderError = null;

    // keep track post values
    $name = filter_input(INPUT_POST, 'name');
    $order = filter_input(INPUT_POST, 'order');

    $int = (int) $order;
    // validate input
    $valid = true;
    if (empty($name)) {
        $nameError = 'Vul een naam in.';
        $valid = false;
    }

    if (empty($order)) {
        $order = 0;
        $valid = false;
    }
    // insert data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO menuitem  VALUES ('',:name,:order);";

        $q = $pdo->prepare($sql);
        $q->bindParam(":name", $name, PDO::PARAM_STR);
        $q->bindParam(":order", $int, PDO::PARAM_INT);

        $q->execute();
        Database::disconnect();
        header("Location: index.php");
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
        <?php
        // put your code here
        ?>
    </body>
</html>
