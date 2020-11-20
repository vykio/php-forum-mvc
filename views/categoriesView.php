<h2>Liste des categories</h2>
<?php
while ($category = $result->fetch()) {
    ?>
    <div class="category"><p><?= $category["label"] ?></p></div>
    <?php
}
?>
<a href=<?= "?action=home" ?>>Retour à l'accueil</a>