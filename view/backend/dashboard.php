<?php ob_start() ?>

<article class="col-lg-12">
    <h1>ok</h1>
</article>



<?php
$content = ob_get_clean();
require('view/template/templateDashboard.php');
?>