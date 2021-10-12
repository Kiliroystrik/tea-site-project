<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Ocha Nihon</title>
</head>

<body>

    <header>
        <!-- LOGGING -->
        <div>
            <span><i class="fas fa-leaf"></i></span>
            <span><i class="fas fa-door-open"></i></span>
            <span><i class="fas fa-shopping-basket"></i></span>
        </div>


        <div>
            <a href="../index.php">
                <p>茶</p>
                <p>Tout le thé du japon</p>
            </a>
        </div>

        <nav>
            <ul>
                <li><a class="current" href="#">Thés</a></li>
                <li><a href="#">Accessoires</a></li>
                <li><a href="#">Cérémonie</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <?php require_once 'controller/controller.php' ?>
    </main>