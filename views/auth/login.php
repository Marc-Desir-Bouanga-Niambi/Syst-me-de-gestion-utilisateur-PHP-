<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form action="" method="POST">
        <label for="email">Veuillez entrer votre email : </label><br>
        <input id="email" type="email" name="email"><br><br>
        
        <label for="password">Veuillez rentrez votre mot de passe : </label><br>
        <input id="password" type="password" name="password"><br><br>
        
        <a href="?action=register">Créer un compte</a>
        <button type="submit">Envoyer</button>
       
    </form>


    <?php if($error) {?>
        <p><?=htmlspecialchars($error)?></p>
    <?php }?>
    
    <?php if ($success) {?>
        <p><?=htmlspecialchars($success)?></p>
    <?php }?>
</body>
</html>