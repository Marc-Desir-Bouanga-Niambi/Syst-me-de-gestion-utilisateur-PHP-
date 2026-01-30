<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($greeting) { ?>
        <p><?= htmlspecialchars($greeting) ?></p>
    <?php } ?>

    <a href="?action=profile">Profile</a>
    <a href="?action=logout">Deconnexion</a>
</body>
</html>