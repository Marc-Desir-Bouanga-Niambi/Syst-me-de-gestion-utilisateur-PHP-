<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require 'views/layout/header.php'; ?>

    <h1>Mon profil</h1>

    <?php if ($greeting) { ?>
        <p><?= htmlspecialchars($greeting) ?></p>
    <?php } ?>

    <?php require 'views/layout/footer.php'; ?>
</body>
</html>
