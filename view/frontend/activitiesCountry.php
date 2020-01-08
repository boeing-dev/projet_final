<?php ob_start(); ?>

<article class="col-lg-7 offset-lg-1" id="listactivity">
    <h1><span>Et maintenant,</span><br/><div>que voulez-vous faire ?</div></h1>
    <a href="index.php?action=passport">Retour</a>
    <ul id="menuActivities">
        <li>
            <a href="index.php?action=activitiesCountry&amp;id=<?= $idCountry ?>&amp;tpActivity=Tourisme&amp;idActivity=firstId">
                <h2 id="colorTitleBlue">Tourisme</h2>
                <img src="public/img/filter/tourism.png" alt="person take a photo" <?php if ($typeActivity=='Tourisme') echo "class='activityActive'" ?>>
            </a>
        </li>
        <li>
            <a href="index.php?action=activitiesCountry&amp;id=<?= $idCountry ?>&amp;tpActivity=Restaurant&amp;idActivity=firstId">
                <h2 id="colorTitleRed">Restaurant</h2>
                <img src="public/img/filter/restaurant.png" alt="picture of a cake" <?php if ($typeActivity=='Restaurant') echo "class='activityActive'" ?>>
            </a>
        </li>
        <li>
            <a href="index.php?action=activitiesCountry&amp;id=<?= $idCountry ?>&amp;tpActivity=Activité&amp;idActivity=firstId">
                <h2 id="colorTitlePurple">Activité</h2>
                <img src="public/img/filter/activity.png" alt="picture of a runner" <?php if ($typeActivity=='Activité') echo "class='activityActive'" ?>>
            </a>
        </li>
    </ul>
    <?php   
    while ($dataActivity = $listActivitiesCountry->fetch()) {
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
        <a href="index.php?action=activitiesCountry&amp;id=<?= $dataActivity['country'] ?>&amp;tpActivity=<?= $dataActivity['typeActivity'] ?>&amp;idActivity=<?= $dataActivity['id'] ?>"><img src="public/img/article/<?= $dataActivity['photo'] ?>" alt="okinawa"></a>
    </div>
    <div id="blockRateFlag">
        <div class="rate">
            <h2><?= $dataActivity['title']." - ".$dataActivity['town'] ?></h2>
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
        <a href=" <?= $dataActivity['localisation'] ?> " target="_blank">
            <img src="public/img/localisation4.png" alt="okinawa">
        </a>
    </div>        
</article>

<?php
}
$listActivitiesCountry->closeCursor();
echo '</article>';  
$dataDetail = $detail->fetch();
?>

<?php if($dataDetail['id']!="") { ?>
<article class="detailActivity col-lg-4">
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
                <p class="textinfo">
                    <?php
                    if($dataDetail['price']==="0"){
                        echo 'Gratuit';    
                    } else if ($dataDetail['price']==="N.C.") {
                        echo $dataDetail['price'];
                    } else { echo $dataDetail['price']."€";}
                    ?>
                </p>
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
    <?php } else {
echo '<article class="col-lg-4 imgSide">';
}?>
</article>

<?php
$content = ob_get_clean();
require('view/template/template.php'); 
?>