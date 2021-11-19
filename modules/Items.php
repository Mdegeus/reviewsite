<?php

function GetItems() {

    // global $pdo;

    // $sql = ;

    // $statement = $pdo->query($sql);

    // $publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

    global $pdo;

    $query = $pdo->prepare("SELECT * FROM items");

    $query->execute();

    $reviews = $query->fetchAll(PDO::FETCH_CLASS,"Item");

    return $reviews;
}

    function GetItem($id) {

        global $pdo;

        $query = $pdo->prepare("SELECT * FROM items WHERE id = $id");

        $query->execute();

        $reviews = $query->fetchAll(PDO::FETCH_CLASS,"Item");

        return $reviews[0];
    }

    function GetItemsWithCatId($id) {

        global $pdo;
    
        $query = $pdo->prepare("SELECT * FROM items WHERE categorie_id = $id");
    
        $query->execute();
    
        $reviews = $query->fetchAll(PDO::FETCH_CLASS,"Categorie");
    
        return $reviews;
    }