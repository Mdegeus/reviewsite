<?php

function GetAllReviews() {

    global $pdo;

    $query = $pdo->prepare("SELECT * FROM reviews");

    $query->execute();

    $reviews = $query->fetchAll(PDO::FETCH_CLASS,"Review");

    return $reviews;
}

function GetReviews($id) {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM reviews WHERE item_id = $id");

    $query->execute();

    $reviews = $query->fetchAll(PDO::FETCH_CLASS,"Review");

    return $reviews;
}

    function GetRecentReviews($Date) {

        global $pdo;

        $query = $pdo->prepare("SELECT * FROM reviews WHERE date = $Date");

        $query->execute();

        $reviews = $query->fetchAll(PDO::FETCH_CLASS,"Review");

        return $reviews;
    }