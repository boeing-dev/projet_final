<?php

require('controller/frontend.php');

try {    
    if (isset($_GET['action'])) {
        switch ($_GET['action']){
            case 'post' :
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    post();
                } else {
                throw new Exception('Aucun identifiant de billet envoyé');
                }
            break;
            
            default :
                listActivity();
        }
    } else {
        listActivity();
    }
}

catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage();
}