<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <h2>Liste des categories</h2>
    <?php
    while ($category = $result->fetch()) {
        ?>
        <div class="category"><p><?= $category["name"] ?></p></div>
        <?php
    }
    ?>
    <a href=<?= "?action=home" ?>>Retour à l'accueil</a>
</body>
</html>