<br>
<h2 class="center">S'inscrire sur le forum</h2>
<br>
<div class="container container2">
    <form action="index.php?action=register" method="post">
    <div class="u-full-width errorMessage" <?= $errorMessage ? "" : "hidden" ?>><?= $errorMessage ?></div>
        <input required type="text" class="input u-full-width" name="pseudo" placeholder="Nom d'utilisateur"/>
        <br>
        <div class="row">
            <input required type="text" class="six columns input" name="name" placeholder="Prénom">
            <input required type="text" class="six columns input" name="firstname" placeholder="Nom">
        </div>
        
        <input required type="text" class="input u-full-width" name="email" placeholder="Adresse email">
        <hr>
        <div class="row">
            <input required type="password" class="six columns" name="password1" placeholder="Mot de passe">
            <input required type="password" class="six columns" name="password2" placeholder="Confirmation mot de passe">
        </div>
        
        <hr>
        
        <input type="submit" class="button-primary u-full-width" name="confirm" value="S'inscrire">
        
    </form>

</div>
