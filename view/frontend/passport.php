<?php ob_start(); ?>

<article class="col-lg-7 offset-lg-1">
    <h1><span>Quel est donc</span><br/><div>Votre prochaine destination</div></h1>
        <ul id="countriesList">
            <?php
            while($dataPassport=$countries->fetch()) {
            ?>
            <li>
                <a href="index.php?action=activitiesCountry&amp;id=<?= $dataPassport['id'] ?>">
                    <h2><?= $dataPassport['country'] ?></h2>
                    <img src="public/img/passport/<?= $dataPassport['vignette'] ?>" alt="vignette_"<?= $dataPassport['country'] ?>>                
                </a>
            </li>
            <?php
            }
            $countries->closeCursor();
            ?>
        </ul>
</article>

<article class="col-lg-4 imgSide">
</article>

<?php
$content = ob_get_clean();
require('view/template/template.php'); 
?>