<?php ob_start() ?>

<article class="col-lg-12" id="countryMAnager">
    <h1>Gestionnaire des pays</h1>
    <section id="listUsable">
        <h2>Pays en fonction</h2>
        <div>
            <?php
            while($dataCountryUsable = $listCountryUsable->fetch()) {
                ?>
            <figure>
                <a href="index.php?action=manageCountry&amp;id=<?= $dataCountryUsable['id'] ?>"><img src="public/img/flag/<?= $dataCountryUsable['flag'] ?>"></a>
                <figcaption><?= $dataCountryUsable['country'] ?></figcaption>
            </figure>
            <?php
            }
            ?>
        </div>
    </section>
    <section id="listUnusable">
        <h2>Pays en attente</h2>
        <div>
            <?php
            while($dataCountryUnusable = $listCountryUnusable->fetch()) {
                    ?>
            <figure>
                <a href="index.php?action=manageCountry&amp;id=<?= $dataCountryUnusable['id'] ?>"><img src="public/img/flag/<?= $dataCountryUnusable['flag'] ?>"></a>
                <figcaption><?= $dataCountryUnusable['country'] ?></figcaption>
            </figure>
            <?php
            }
            ?>
        </div>
    </section>
</article>

<?php
$listCountryUsable->closeCursor();
$listCountryUnusable->closeCursor();
$content = ob_get_clean();
require('view/template/templateDashboard.php');
?>