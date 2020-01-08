<?php ob_start() ?>

<article class="col-lg-11 offset-lg-1" id="modifyCountry">
    <?php 
    $countryDetail = $country->fetch();
    ?>
    <h1>Fiche pays</h1>
    <form enctype="multipart/form-data" method="post" action="index.php?action=modifyCountry">
        <h2><?= $countryDetail['country'] ?></h2>
        <input type="hidden" value="<?= $countryDetail['id'] ?>" name="idCountry">
        <input type="hidden" value="<?= $countryDetail['vignette'] ?>" name="vignette">
        <div>
            <label for="view">Afficher</label>
            <?php 
            if ($countryDetail['view']) {
                echo '<input type="checkbox" name="view" id="view" checked>';
            } else {
                echo '<input type="checkbox" name="view" id="view">';
            }
            ?>
        </div>
        <div>
            <img src="public/img/flag/<?= $countryDetail['flag'] ?>" alt="drapeau <?= $countryDetail['country'] ?>">
            <img src="public/img/passport/<?= $countryDetail['vignette'] ?>" alt="vignette de <?= $countryDetail['country'] ?>">
        </div>
        <div>
            <label for="vignette">Changer la vignette du pays</label>
            <input type="file" name="vignette" id="vignette">
        </div>
        <div>
            <input type="submit" value="MODIFIER">
            <a href="index.php?action=countryList">ANNULER</a>
        </div>
    </form>
    
</article>

<?php
$country->closeCursor();
$content = ob_get_clean();
require('view/template/templateDashboard.php');
?>