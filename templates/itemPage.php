<body style="background-color: rgb(19, 19, 19); padding: 10px;">

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
        </div>
    </grid>

    <button type="button" class="btn btn-primary block-btn review-form-show-btn" data-bs-toggle="modal" data-bs-target="#reviewForm">Place Review</button>

    <div class="item-container">
        <div class="row gy-3">
            <?php foreach ($reviews as $review):?> <!--Loop through the database and get all items-->
                <?php 
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
                                    <img src="/public/img/extra/star_Positive.svg" style="width: 2em"></img>
                                <?php else: ?>
                                    <img src="/public/img/extra/star_Negative.svg" style="width: 2em"></img>
                            <?php endif; ?>
                        <?php endfor; ?>
                        <p>Rating: <?= $review->rating ?></p>
                        <p><?= $review->command ?></p>
                        <small><?=$review->date . " | " . " Review uploaded by: " . $review->username?></small>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <a href="/"><button class="btn btn-primary homeButton">Back</button></a>

<!-- Modal -->
<div class="modal fade" id="reviewForm" tabindex="-1" aria-labelledby="reviewFormLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="reviewFormLabel">Review Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="review-form" method="post">
            <div class="mb-3">
                <input class="form-control" type="text" hidden name="id" value="<?=$item->id?>">
                <input class="form-control" type="text" hidden name="type" value="review">
                <input class="form-control" type="text" required name="name" placeholder="Display name">
                <br>
                <input class="form-control" type="email" required name="email" placeholder="Email">
                <br>
                <textarea class="form-command-input" type="text" required name="command"></textarea>
                <select type="text" name="rating" required>
                    <option value="">Select A Rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
            </select>
            </div>
            <div class="modal-footer">
            <button class="btn block-btn" data-bs-dismiss="modal">Cancel</button>
            <button class="btn block-btn">Post</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>

<?php

    global $pdo;
    global $item;

    if (!isset($_GET['posted']) && isset($_POST['type']) && $_POST['type'] == "review") {

        $itemId = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $text = $_POST['command'];
        $rating = $_POST['rating'];

        $text = htmlspecialchars($text);

        if ($rating >= 1 && $rating <= 5) {
            $sql = "INSERT INTO reviews (item_id, username, email, command, rating)
            VALUES ('$itemId', '$name', '$email', '$text', '$rating')";
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