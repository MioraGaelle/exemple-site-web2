<?php $titreOnglet = 'Test'; ?> 

<?php // Tout ce qui se trouve entre ob_start et ob_get_clean n'est pas affiché à l'écran, mais retourné par ob_get_clean. ?>
<?php ob_start(); ?> 

<h1 class="text-center">Test !</h1>

<!-- Ajouter un formulaire // aller dans bootstrap web et chercher des form //placeholder ça ne s'affiche pas, on peut écrire n'importe quoi -->
<!-- Permettre de soumettre un formulaire //btn-primary : couleur // si action vide : pas d'action-->
 <!-- Ajouter le case test dans gerer Post dans index.php // ajouter fonction dans formulaire-->
<form class = "w-50 mx-auto" method="post" action= "index.php?ressource=/test&methode=POST">
    <div class="form-floating mb-3">
        <input type="texte" class="form-control" id="input-test" Name="CeQueVousVoulez" placeholder="test">
        <label for="floatingInput">Test</label>
    </div>

    <button type="submit" class="btn btn-primary">Soumettre</button>
</form>

<?php // $contenu sera utilisé par vue/gabarit.php ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'vue/gabarit.php'; ?> 

