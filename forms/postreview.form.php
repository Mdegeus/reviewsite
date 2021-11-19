<?php

    global $pdo;

    if (isset($_POST['type']) && $_POST['type'] == "review") {

        $itemId = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $text = $_POST['command'];

        $sql = "INSERT INTO reviews (item_id, username, email, command)
        VALUES ('$itemId', '$name', '$email', '$text')";
        $pdo->execute($sql);
    }

?>