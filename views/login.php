<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="email">Veuillez entrer votre email : </label><br>
        <input id="email" type="email" name="email"><br><br>
        
        <label for="password">Veuillez rentrez votre mot de passe : </label><br>
        <input id="password" type="password" name="password"><br><br>
        
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