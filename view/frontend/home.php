<?php ob_start(); ?>

<article class="col-lg-7 offset-lg-1" id="listactivity">
    <h1><span>Bienvenue sur</span><br/><div>Burnout Life</div></h1>


<?php
while ($dataActivity = $activity->fetch()) {
    switch ($dataActivity['typeActivity']) {
        case 'Tourisme':
            echo '<article class="activity blue">';
            break;
        case 'Restaurant':
            echo '<article class="activity red">';
            break;
        case 'Activité':
            echo '<article class="activity purple">';
            break;
    }
?>    
    <div class="containerPicture">
        <a href="index.php?action=detailActivity&amp;id=<?= $dataActivity['id'] ?>"><img src="public/img/article/<?= $dataActivity['photo'] ?>" alt="okinawa"></a>
    </div>
    <div id="blockRateFlag">
        <div class="rate">
            <h2>Kouri Bride - Okinawa</h2>
            <ul class="liststar">
                <?php
                for($i=0; $i<$dataActivity['note']; $i++){
                    echo "<li><img src='public/img/staryellow.png' alt='star'></li>";
                }
                for($i=$dataActivity['note']; $i<5; $i++){
                    echo "<li><img src='public/img/starwhite1.png' alt='star'></li>";
                }
                ?>
            </ul>
        </div>        
        <div class="flagCountry">
            <img src="public/img/flag/<?= $dataActivity['flag'] ?>" alt="okinawa">
        </div>        
    </div>
    <div class="geolocalisation">
        <a href= <?= $dataActivity['localisation'] ?> target="_blank">
            <img src="public/img/localisation4.png" alt="okinawa">
        </a>
    </div>        
</article>

<?php
}
$activity->closeCursor();
echo '</article>';    
    
$dataDetail = $detail->fetch();
?>
    <article class="detailActivity col-lg-3.5">
        <figure id="photoDetail">
            <img src="public/img/article/<?= $dataDetail['photo'] ?>" alt="okinawa">
            <figcaption>
                <a href=<?= $dataDetail['information'] ?>><img src="public/img/fiche/information.png" alt="Information Icon"></a>
            </figcaption>
        </figure>
        <div id="textDetail">
            <h2><?= $dataDetail['title'] ?></h2>
            <p><?= $dataDetail['description'] ?></p>
        </div>
        <div class="listInfo">
            <ul>
                <li>
                    <img src="public/img/fiche/icon_argent.png" alt="argent icone">
                    <p class="textinfo"><?= $dataDetail['price'] ?></p>
                </li>
                <li>
                    <img src="public/img/fiche/icon_close.png" alt="argent icone">
                    <p class="textinfo"><?= $dataDetail['timetable'] ?></p>
                </li>
            </ul>
            <ul>
                <li>
                    <img src="public/img/fiche/icon_frequence.png" alt="argent icone">
                    <p class="textinfo"><?= $dataDetail['frequency'] ?></p>
                </li>
                <li>
                    <img src="public/img/fiche/icon_tourism.png" alt="argent icone">
                    <p class="textinfo"><?= $dataDetail['typeActivity'] ?></p>
                </li>
            </ul>
        </div>
    </article>

<?php

$detail->closeCursor();
$content = ob_get_clean();
require('view/template/template.php'); 
?>