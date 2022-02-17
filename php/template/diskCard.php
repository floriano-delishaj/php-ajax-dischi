<?php require __DIR__ . "/../database/diskDb.php" ;?>

    <?php foreach($db as $disk) { ?>
    <div class="col-2 mr-2 mb-3">
        <div class="text-center">
            <div class="disk-card">
                <img src="<?php echo $disk['poster']?>" alt="">
                <h6 class="text-white pt-2"><?php echo $disk['title']?></h6>
                <p><?php echo $disk['author']?></p>
                <p><?php echo $disk['year']?></p>
            </div>
        </div>
    </div>
    <?php }?>