<?php ob_start() ?>

<article class="col-lg-11 offset-lg-1" id="viewActivity">
    <?php 
    $dataActivity = $activity->fetch();
    ?>
    <h1>Fiche d'activité</h1>
    <a href="index.php?action=dashboard">retour</a>
    <?php 
    if ($dataActivity['visibility']) {
        echo '<div class="blockActivity jsgreen" id="state">';
        echo 'Article mis en ligne';
    } else {
        echo '<div class="blockActivity jsred" id="state">';
        echo 'Article mis en attente';
    }
    echo '</div>';
    ?>
    <h2 class="blockActivity"><?= $dataActivity['title']." - ".$dataActivity['town'] ?></h2>
    <ul class="blockActivity">
    <?php
    for($i=0; $i<$dataActivity['note']; $i++){
        echo "<li><img src='public/img/staryellow.png' alt='star'></li>";
    }
    ?>
    </ul>
    <figure id="activityBlock0" class="blockActivity">
        <figcaption> <?= $dataActivity[13] ?></figcaption>
        <img src="public/img/flag/<?= $dataActivity['flag'] ?>" alt="<?= $dataActivity['country'] ?>">            
    </figure>
    <div id="activityBlock1" class="blockActivity">
        <div>
            <label>Type d'activité : </label>
            <input type="text" value="<?= $dataActivity['14'] ?>">
        </div>
        <div>
            <label>fréquence : </label>
            <input type="text" value="<?= $dataActivity['12'] ?>">
        </div>
    </div>
    <div id="activityBlock2" class="blockActivity">
        <label>Description : </label>
        <textarea ><?= $dataActivity['description'] ?></textarea>
    </div>
    <div id="activityBlock3" class="blockActivity">
        <div>
            <label>Prix : </label>
            <input type="text" value="<?= $dataActivity['price']." €" ?>">
        </div>
        <div>
            <label>Horaire : </label>
            <input type="text" value="<?= $dataActivity['timetable'] ?>">
        </div>
    </div>
    <div id="activityBlock4" class="blockActivity">
        <label>Information : </label>
        <textarea ><?= $dataActivity['information'] ?></textarea>
    </div>
    <figure id="activityBlock5" class="blockActivity">
        <figcaption>Illustration :</figcaption>
        <img src="public/img/article/<?= $dataActivity['photo'] ?>" alt="<?= $dataActivity['title'] ?>">            
    </figure>
</article>
<script src="public/js/blink.js"></script>

<?php
$activity->closeCursor();
$content = ob_get_clean();
require('view/template/templateDashboard.php');
?>