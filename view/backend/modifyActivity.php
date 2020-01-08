<?php ob_start() ?>

<article class="col-lg-11 offset-lg-1" id="modifyActivity">
    <?php 
    $dataActivity = $activity->fetch();
echo $dataActivity[14];
    ?>
    <h1>Modifier une activité</h1>
    <form enctype="multipart/form-data" action="index.php?action=updateActivity" method="post">
        <input type="hidden" value="<?= $dataActivity['id'] ?>" name="id">
        <div id="modifyBlock0">
            <label for="state">Mettre l'article en ligne</label>
            <?php
            if ($dataActivity['visibility']) {
                echo '<input type="checkbox" name="state" id="state" checked>';
            } else {
                echo '<input type="checkbox" name="state" id="state">';
            }
            ?>
        </div>
        <div id="modifyBlock1">
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" value="<?= $dataActivity['title'] ?>">
            <label for="town">Ville</label>
            <input type="text" id="town" name="town" value="<?= $dataActivity['town'] ?>">
            <label for="country">Pays</label>
            <select name="country" id="country">
                <option value="<?= $dataActivity['country'] ?>"><?= $dataActivity['13'] ?></option>
                <?php
                while ($dataCountry=$country->fetch()) {
                    echo "<option value='".$dataCountry['id']."'>".$dataCountry['country']."</option>";
                }
                ?>
            </select>            
        </div>        
        <div id="modifyBlock2">
            <label for="price">Prix</label>
            <input type="text" id="price" name="price" value="<?= $dataActivity['price'] ?>">
            <label for="timetable">Horaires</label>
            <input type="text" id="timetable" name="timetable" value="<?= $dataActivity['timetable'] ?>">
            <label for="note">Note</label>
            <input type="number" id="note" name="note" value="<?= $dataActivity['note'] ?>">/5
        </div>
        <div id="modifyBlock3">
            <div>
                <label for="description">Description</label>
                <textarea id="description" name="description"><?= $dataActivity['description'] ?></textarea>
            </div>
            <div>
                <label for="information">Information</label>
                <textarea id="information" name="information"><?= $dataActivity['information'] ?></textarea>
            </div>
        </div>
        <div id="modifyBlock4">
            <label for="tpActivity">Type d'activité</label>
            <select name="tpActivity" id="tpActivity">
                <option value="<?= $dataActivity['typeActivity'] ?>"><?= $dataActivity['14'] ?></option>
                <?php 
                while ($dataTpActivity=$typeActivity->fetch()) {
                    echo "<option value='".$dataTpActivity['id']."'>".$dataTpActivity['typeActivity']."</option>";
                }
                ?>
            </select>        
            <label for="frequency">Fréquence</label>
            <select name="frequency" id="frequency">
                <option value="<?= $dataActivity['frequency'] ?>"><?= $dataActivity['12'] ?></option>
                <?php 
                while ($dataFrequency=$frequency->fetch()) {
                    echo "<option value='".$dataFrequency['id']."'>".$dataFrequency['frequency']."</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="photo"><img src="public/img/article/<?= $dataActivity['photo'] ?>"></label>
            <input type="file" id="photo" name="photo">
        </div>
        <div id="modifyButton">
            <input type="submit" value="MODIFIER">
            <a href="index.php?action=dashboard">ANNULER</a>
        </div>
    </form>
<?php
$activity->closeCursor();
$content = ob_get_clean();
require('view/template/templateDashboard.php');
?>