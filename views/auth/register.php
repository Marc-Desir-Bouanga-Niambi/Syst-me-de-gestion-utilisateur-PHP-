<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form action="" method='POST'>
        <label for="email">Veuillez insérer votre email : </label><br>
        <input type="email" name="email"><br><br>

        <label for="password">Veuillez rentrez votre mot de passe : </label><br>
        <input type="password" name="password"><br><br>
        
        <a href="?action=login">Connectez vous!</a>
        <button type="submit">Envoyer</button>
    </form>

    <?php if($success) { ?>
        <p><?= htmlspecialchars($success) ?></p>
    <?php }?>

    <?php if($error) { ?>
        <p><?= htmlspecialchars($error) ?></p>
    <?php }?>

      
</body>
</html>