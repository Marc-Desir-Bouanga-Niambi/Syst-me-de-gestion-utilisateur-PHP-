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

<table border="1">
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Rôle</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['role'] ?></td>
            <td>
                <a href="edit.php?id=<?= $user['id'] ?>">Modifier</a> |
                <a href="delete.php?id=<?= $user['id'] ?>">Supprimer</a>
            </td>
        </tr>
    <?php } ?>
</table>



    <a href="?action=profile">Profile</a>
    <a href="?action=logout">Deconnexion</a>
</body>
</html>