<?php ob_start(); ?>

<article class="col-lg-7 offset-lg-1" id="listactivity">
    <h1><span>Bienvenue sur</span><br/><div>Burnout Life</div></h1>


<?php
while ($data = $activity->fetch()) {
    switch ($data['typeActivity']) {
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
            <img src="public/img/article/<?= $data['photo'] ?>" alt="okinawa">
        </div>
        <div id="blockRateFlag">
            <div class="rate">
                <h2>Kouri Bride - Okinawa</h2>
                <ul class="liststar">
                    <?php
                    for($i=0; $i<$data['note']; $i++){
                        echo "<li><img src='public/img/staryellow.png' alt='star'></li>";
                    }
                    for($i=$data['note']; $i<5; $i++){
                        echo "<li><img src='public/img/starwhite1.png' alt='star'></li>";
                    }
                    ?>
                </ul>
            </div>        
            <div class="flagCountry">
                <img src="public/img/flag/<?= $data['flag'] ?>" alt="okinawa">
            </div>        
        </div>
        <div class="geolocalisation">
            <a target="_blank" href="https://www.google.fr/maps/place/Chura+Terrace/@26.6781949,128.0128782,15.26z/data=!4m13!1m7!3m6!1s0x34f57062eeab5be7:0x35bb617286fdd1ef!2sPr%C3%A9fecture+d'Okinawa,+Japon!3b1!8m2!3d26.1201911!4d127.7025012!3m4!1s0x0:0xebfe6841f93a720c!8m2!3d26.677958!4d128.0119926">
                <img src="public/img/localisation4.png" alt="okinawa">
            </a>
        </div>        
    </article>
<?php
}
$activity->closeCursor();
?>
</article> 



<article class="detailActivity col-lg-3.5">
        <figure id="photoDetail">
            <img src="public/img/article/article1.png" alt="okinawa">
            <figcaption>
                <a href="#"><img src="public/img/fiche/information.png" alt="Information Icon"></a>
            </figcaption>
        </figure>
        <div id="textDetail">
            <h2>titre</h2>
            <p>Kouri Bridge est le plus grand pont de l’ile. Il se situe au Nord de l’ile principale d’Okinawa.
                        Il est très difficile d’accès en bus. Si vous restez peu de temps à Okinawa, je vous déconseille
                        d’y aller. Favorisé la visite de petite ile comme Zanami.</p>
        </div>
        <div class="listInfo">
            <ul>
                <li>
                    <img src="public/img/fiche/icon_argent.png" alt="argent icone">
                    <p class="textinfo">gratuit</p>
                </li>
                <li>
                    <img src="public/img/fiche/icon_close.png" alt="argent icone">
                    <p class="textinfo">9h / 15h</p>
                </li>
            </ul>
            <ul>
                <li>
                    <img src="public/img/fiche/icon_frequence.png" alt="argent icone">
                    <p class="textinfo">Immersion</p>
                </li>
                <li>
                    <img src="public/img/fiche/icon_tourism.png" alt="argent icone">
                    <p class="textinfo">Tourisme</p>
                </li>
            </ul>
        </div>
    </article>



<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php'); ?>