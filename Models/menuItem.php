<?php

require '../../Models/database.php';

class MenuItem {

    public $id;
    public $name;
    public $order;

    public function getItem($id = 0) {
        $db = new Database();
        $db->query("SELECT * FROM menuitem WHERE Id=:id");
        $db->bind(":id", $id);
        $db->execute();
        return $db->single();
    }

    public function getAllItems() {
        $db = new Database();
        $db->query('SELECT * FROM menuitem ORDER BY `Order`');
        return $db->resultset();
    }

    public function CreateItem($name = '', $order = 9) {
        $db = new Database();
        $db->query("INSERT INTO menuitem  VALUES ('',:name,:order);");
        $db->bind(":name", $name);
        $db->bind(":order", $order);
        $db->execute();
        header("Location: index.php");
    }

    public function EditItem($id = 0, $name = '', $order = 0) {
        $db = new Database();
        $db->query("UPDATE menuitem  SET `Name`=:name, `Order`=:order WHERE `Id`=:id;");
        $db->bind(":id", $id);
        $db->bind(":name", $name);
        $db->bind(":order", $order);
        $db->execute();
        header("Location: index.php");
    }

    public function DeleteItem($id = 0) {
        $db = new Database();
        $db->query("DELETE FROM menuitem  WHERE `Id`=:id");
        $db->bind(':id', $id);
        $db->execute();
        header("Location: index.php");
    }

}
