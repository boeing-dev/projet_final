<?php ob_start() ?>

<article class="col-lg-12" id="activityToDelete">
    <section id="headerList">
        <img src="public/img/dashboard/header_list.png" alt="illustration connexion">
        <h1>Effacer l'activité</h1>
    </section>
    <section id="deleteBlock">
        <?php
        $dataActivity = $activity->fetch();
        ?>
        <div><?= $dataActivity['title'].' - '.$dataActivity['town'] ?></div>
        <div><img src="public/img/flag/<?= $dataActivity['flag'] ?>" alt="darpeau du pays"></div>
        <div>
            <p><?= $dataActivity['description'] ?></p>
            <img src="public/img/article/<?= $dataActivity['photo'] ?>" alt="photo de l'activité">
        </div>
    </section>
    <section id="deleteButton">
        <a href="index.php?action=deleteActivity&amp;id=<?= $dataActivity['id'] ?>" class="text-danger">EFFACER</a>
        <a href="index.php?action=dashboard" class="text-success">ANNULER</a>
    </section>
</article>

<?php
$activity->closeCursor();
$content = ob_get_clean();
require('view/template/templateDashboard.php');
?>