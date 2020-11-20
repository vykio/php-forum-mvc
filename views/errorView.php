<div class="container">
<br>
    <h2 class="center">Oh non! Une erreur est survenue...</h2>
    <hr>
    <h4 class="center">Détail de l'erreur</h4>
    <p class="center">
        <?php echo $error . ' [' . $file . ':' . $line . ']'; ?>
    </p>
    <hr>
    <a href="index.php?action=home">Revenir à l'accueil</a>
</div>