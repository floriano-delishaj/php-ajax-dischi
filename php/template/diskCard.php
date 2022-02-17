<?php require __DIR__ . "/../database/diskDb.php" ;?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>

<body>
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
</body>

</html>