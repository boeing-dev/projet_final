<?php ob_start() ?>

<article class="col-lg-12" id="listActivities">
    <section id="headerList">
        <img src="public/img/dashboard/header_list.png" alt="illustration connexion">
        <h1>Liste des lieux</h1>
    </section>
    <section id="blockList">
        <?php
        while ($dataActivity = $activity->fetch()) {
            echo '<article class="activityLittleList">';
            echo '<div class="identityBLock">';
            switch ($dataActivity['typeActivity']) {

            case 'Tourisme':
                echo '<div class="blue blockColor"></div>';
                break;
            case 'Restaurant':
                echo '<div class="red blockColor"></div>';
                break;
            case 'Activité':
                echo '<div class="purple blockColor"></div>';
                break;
            }
            ?>
            <div >
                <img src="public/img/article/<?= $dataActivity['photo'] ?>" alt="okinawa">
            </div>
            <div class="blockTitle"><?= $dataActivity['title'].' - '.$dataActivity['town'] ?></div>
        
        <?php
                echo '</div>';
        if ($dataActivity['visibility']) { ?>
        <div class="blockStatus text-success">validé</div>
        <?php } else { ?>
        <div class="blockStatus text-danger">En attente</div>
        <?php } ?>
        <div class="actionBlock">
            <a href="#" class="text-success"><i class="far fa-eye"></i></a>
            <a href="#" class="text-warning"><i class="far fa-edit"></i></a>
            <a href="#" class="text-danger"><i class="far fa-trash-alt"></i></a>
        </div>        
        <?php
        echo '</article>';
        }
        ?>
    </section>
</article>

<?php
$content = ob_get_clean();
require('view/template/templateDashboard.php');
?>