<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>php dischi</title>
</head>

<body>
    <header class="d-flex align-items-center">
        <img src="../img/logo-spotify.png" alt="">
    </header>

    <main>
        <div class="container">
            <div class="row pt-5">
                <?php include __DIR__ . "/template/diskCard.php" ?>
            </div>
        </div>

    </main>
</body>

</html>