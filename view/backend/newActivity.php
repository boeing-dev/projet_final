<?php ob_start() ?>

<article class="col-lg-12" id="newActivity">
    <section id="headerList">
        <img src="public/img/add/add_header.png" alt="illustration ajout de données">
        <h1>Ajouter un lieu</h1>
    </section>
    <form enctype="multipart/form-data" action="index.php?action=addActivity" method="post">
        <div id="newActivityBlock1">
            <div>
                <div class="leftList">
                    <input type="file" name="photo">
                    <div>
                        <label for="state">Mettre l'activité en ligne</label>
                        <input type="checkbox" id="state" name="state">
                    </div> 
                    <div>
                        <label for="note">Notation de l'activité</label>
                        <input type="number" id="note" name="note" class="inputContainer">
                    </div>
                </div>
                <div class="rightList">
                    <input type="text" name="title" placeholder="Titre" class="inputContainer">
                    <input type="text" name="town" placeholder="Ville" class="inputContainer">
                    <input type="text" name="localisation" placeholder="Localisation (lien)" class="inputContainer">
                    <select name="country" class="selectContainer">
                        <option value="1">Selectionne un pays</option>
                        <?php 
                        while ($dataCountry=$country->fetch()) {
                            echo "<option value='".$dataCountry['id']."'>".$dataCountry['country']."</option>";
                        }
                        ?>
                    </select>        
                </div>
            </div>
            <div class="btnBlock">
                <a href="index.php?action=dashboard" class="backButton"><i class="fas fa-angle-left"></i></a>
                <a href="#" class="btn" id="next">Suivant(1/2)</a>
            </div>
        </div>
        <div id="newActivityBlock2">
            <div>
                <div class="leftList">
                    <select name="tpActivity" class="selectContainer">
                        <option value="1">Type d'activité</option>
                        <?php 
                        while ($dataTpActivity=$tpActivity->fetch()) {
                            echo "<option value='".$dataTpActivity['id']."'>".$dataTpActivity['typeActivity']."</option>";
                        }
                        ?>
                    </select>
                    <select name="frequency" class="selectContainer">
                        <option value="1">Fréquence</option>
                        <?php 
                        while ($dataFrequency=$frequency->fetch()) {
                            echo "<option value='".$dataFrequency['id']."'>".$dataFrequency['frequency']."</option>";
                        }
                        ?>
                    </select>    
                    <input type="text" name="timetable" placeholder="Horaire" class="inputContainer">
                    <input type="text" name="price" placeholder="Prix" class="inputContainer">
                    <input type="text" name="information" placeholder="Information (lien)" class="inputContainer">
                </div>
                <div class="rightList">
                    <textarea placeholder="Tapez votre article (300 caractères maximum)" name="description" class="inputContainer"></textarea>
                </div>
            </div>            
            <div class="btnBlock">
                <a href="#" id="prev" class="backButton"><i class="fas fa-angle-left"></i></a>
                <input type="submit" value="Publiez" id="addButton">
            </div>           
        </div>
    </form>
</article>
<script src="public/js/newActivity.js"></script>
<?php
$country->closeCursor();
$tpActivity->closeCursor();
$content = ob_get_clean();
require('view/template/templateDashboard.php');
?>