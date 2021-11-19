<?php

function GetCategories() {

    global $pdo;

    $query = $pdo->prepare("SELECT * FROM categories");

    $query->execute();

    $reviews = $query->fetchAll(PDO::FETCH_CLASS,"Categorie");

    return $reviews;
}

function GetCategorie($id) {

    global $pdo;

    $query = $pdo->prepare("SELECT * FROM categories WHERE id = $id");

    $query->execute();

    $reviews = $query->fetchAll(PDO::FETCH_CLASS,"Categorie");

    return $reviews[0];
    
}