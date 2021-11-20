<body style="background-color: rgb(19, 19, 19); padding: 10px;">
    <?php   
       global $items;
       global $categories;

       if (isset($_GET['categorie'])) {
           $items = GetItemsWithCatId($_GET['categorie']);
       }
    ?>

    <h1>Review Site</h1>

    <br>

    <div class="row gy-3"> <!--Loop through the database and get all items-->
        <div class="col-sm-0 col-md-100">
            <a href="/"><button class="tag-button">All</button></a> 
            <?php foreach ($categories as $categorie):?>
                 <a href="/?categorie=<?= $categorie->id ?>"><button class="tag-button"><?= $categorie->title ?></button></a>
            <?php endforeach; ?>
        </div>        
    </div>

    <br>

    <form class="searchbar-container" autocomplete="off">
        <input class="searchbar" name="search" placeholder="Search"></input>
        <br>
        <br>
        <h5 class="text-center">Please make sure your search term is exactly like the item it's title you are looking for.</h5>
        <?php if (isset($_GET["categorie"])): ?>
            <input name="categorie" hidden value="<?= $_GET["categorie"] ?>"></input>
        <?php endif; ?>
    </form>

    <div class="item-container">
        <div class="row gy-3"> <!--Loop through the database and get all items-->
            <?php foreach ($items as $item):?>
                <div class="col-sm-2 col-md-2">
                    <div class="card item-card">
                        <img class="card-img-top" src="<?= $item->img?>" style="width: auto;"></img>
                        <div class="card-body ">
                            <h5><?= $item->title ?></h5>
                            <p><?= substr($item->description, 0, 60); ?><?php if (strlen($item->description) > 60) {echo "...";}?></p>
                            <?php 
                                $thisCategorie = getCategorie($item->categorie_id);
                            ?>
                        </div>
                        <div class="card-body ">
                            <p class="card-tag"><?= $thisCategorie->title ?></p>
                        </div>
                        <a href="?item=<?= $item->id ?>"><button class="btn lower-card-btn">Open</button></a>
                    </div>
                </div>      
            <?php endforeach; ?>
        </div>
    </div>
</body>