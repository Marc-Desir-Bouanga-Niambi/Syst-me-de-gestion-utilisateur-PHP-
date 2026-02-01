<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="?action=profile">Profil</a>
            <?php if($_SESSION['role'] === 'admin') { ?>
                <a href="?action=adminPage">Espace admin</a>
            <?php } ?>

            <a href="?action=logout">Deconnexion</a>
        </nav>
    </header>
</body>
</html>