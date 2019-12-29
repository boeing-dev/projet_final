<?php ob_start() ?>

<article class="col-lg-12" id="connectionBlock">
    <section id="connectionArticle">
        <img src="public/img/connexion/header_connexion.png" alt="illustration connexion">
        <form action="index.php?action=login" method="post">
            <div class="containerInput">
                <input type="text" placeholder="Identifiant" name="login">
                <i class="fas fa-user"></i>            
            </div>
            <div class="containerInput">
                <input type="password" placeholder="Mot de passe" name="password">
                <i class="fas fa-lock"></i>
            </div>

            <div class="connectionButtons">
                <a href="index.php"><div class="backButton"><i class="fas fa-angle-left"></i></div></a>
                <input type="submit" value="Connexion" class="connectionButton">
            </div>
        </form>
    </section>
</article>



<?php
$content = ob_get_clean();
require('view/template/templateConnection.php');
?>