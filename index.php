<!DOCTYPE html>
<html lang="en">
<?php
    include_once "./templates/defaults/head.php";
    include_once "./templates/defaults/requirements.php";
    include_once "./templates/defaults/classes.php";

    include_once "./templates/defaults/navbar.php";
?>
<body>
    <?php
        
        if (isset($_GET["item"])) {
            $reviews = GetReviews($_GET["item"]);
            $item = GetItem($_GET["item"]);
            $categorie = getcategorie(1);
            include_once "./templates/itemPage.php";
        } else {
            $categories = getcategories();
            $items = GetItems();
            include_once "./templates/home.php";
        }

    ?>
</body>
<?php
    include_once "./templates/defaults/scripts.php";
    include_once "./templates/defaults/modals.php";
?>
</html>