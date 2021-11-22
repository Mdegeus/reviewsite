<body style="background-color: rgb(19, 19, 19);">

    <?php   
        global $reviews;
        global $item;
    ?> 

    <grid class="item-top-grid">
        <h4 class="text-center"><?= $item->title ?></h4>
    </grid>

    <grid class="item-top-grid">
        <div class="item-title-div">
            <img src="<?= $item->img ?>"></img>
        </div>
        <div class="textBox item-text-div">
            <p><?php if (strlen($item->description) <= 0) { echo "No description available"; } else { echo $item->description; } ?></p>
            <hr>
            <?php if (strlen($item->siteLink) <= 0) { echo "<p>No site link available</p>"; } else { echo "Item link: <a target='_blank' href='$item->siteLink'>$item->siteLink<a>"; } ?>
        </div>
    </grid>

    <button type="button" class="btn btn-primary block-btn review-form-show-btn" data-bs-toggle="modal" data-bs-target="#reviewForm">Place Review</button>

    <div class="item-container">
        <div class="row gy-3">
            <?php foreach ($reviews as $review):?> <!--Loop through the database and get all items-->
                <?php 

                    $user = GetUserById($review->user);

                    $reviewClass = "reviewCardHigh";
                    if ($review->rating < 3) {
                        $reviewClass = "reviewCardLow";
                    }
                ?>
                <div class="card <?=$reviewClass?>">
                    <div class="card-body">
                    <h5><?= $review->title ?></h5>
                        <?php for ($i=0; $i < 5; $i++):?>
                            <?php if ($i < $review->rating): ?>
                                    <img src="/public/img/extra/star_Positive.svg" style="width: 2em; margin-bottom: .3em;"></img>
                                <?php else: ?>
                                    <img src="/public/img/extra/star_Negative.svg" style="width: 2em; margin-bottom: .3em;"></img>
                            <?php endif; ?>
                        <?php endfor; ?>
                        <p>Rating: <?= $review->rating ?></p>
                        <p> <?= $review->command ?></p>
                        <small><?=$review->date . " | " . " Review uploaded by: "?><?php if ($review->showName != "false") {echo $user->username; } else {echo "Anonymous"; } ?></small>
                        <?php
                            if (isset($_SESSION['user']) && $_SESSION['user']->username == "admin") {

                                echo "<form method='post'>
                                    <input type='text' hidden name='targetId' value='" . $review->id . "'></input>
                                    <button type='submit' name='remove' value='remove'>Delete</button>
                                </form>";

                                
                            }
                            if (isset($_POST['remove']) && isset($_SESSION['user']) && $_SESSION['user']->username == "admin") {

                                $id = $_POST['targetId'];
                                $sql = "DELETE FROM reviews WHERE id = '$id'";
                                $pdo->exec($sql);

                                echo 
                                "<head>
                                    <meta http-equiv='refresh' content='.2;URL=/?item=$review->item_id'>
                                </head>";
                            }
                        ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <a href="/"><button class="btn btn-primary homeButton">Back</button></a>

</body>

<?php

    global $pdo;
    global $item;

    if (!isset($_GET['posted']) && isset($_POST['type']) && $_POST['type'] == "review" && isset($_SESSION['user'])) {

        $itemId = $_POST['id'];
        $text = $_POST['command'];
        $rating = $_POST['rating'];
        $showName;

        if (!isset($_POST['showName'])) {
            $showName = "false"; 
        } else {
            $showName = "true"; 
        }

        $text = htmlspecialchars($text);
        $text = addslashes($text);

        $userid = $_SESSION['user']->id;

        if ($rating >= 1 && $rating <= 5) {
            $sql = "INSERT INTO reviews (item_id, command, rating, showName, user)
            VALUES ('$itemId', '$text', '$rating', '$showName', '$userid')";

            $pdo->exec($sql);

            echo 
            "<head>
                <meta http-equiv='refresh' content='.2;URL=/?item=$itemId'>
            </head>";
        } else {
            echo 
            "<head>
                <meta http-equiv='refresh' content='0;URL=/?item=$itemId'>
            </head>";
        }
    }

?>