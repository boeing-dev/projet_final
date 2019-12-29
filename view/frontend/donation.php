<?php ob_start() ?>

<article class="col-lg-12" id="donationBlock">
    <section id="donationArticle">
        <img src="public/img/donation/icon_money.png" alt="icone argent">
        <h1>1 euro, c‘est le prix d‘un Onigiri au Japon.</h1>
        <p>Une simple donation montre que
            notre travail vous plait. Cela nous motive à donner le meilleur de nous même
            afin de vous proposez plus de contenues. Si nous récoltons suffisamment de dons,
            des t-shirts exclusifs et des nouvelles fonctionnalités arriveront très prochainement.
        </p>
        <div class="listbtn">
            <a href="index.php"><div class="btn_back"><i class="fas fa-chevron-left"></i></div></a>
            <a href="https://www.paypal.me/lawcedric"><div class="btn_buy">Faire un don</div></a>
        </div>
    </section>
</article>



<?php
$content = ob_get_clean();
require('view/template/templateDonation.php');
?>