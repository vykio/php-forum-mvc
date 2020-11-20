<h2 class="center">Bienvenue sur le forum</h2>

<h3>Liste des catégories</h3>
<?php
    while ($category = $categories->fetch()) {
    ?>
        <div class="category"><p><?= $category["label"] ?></p></div>
    <?php
    }
?>