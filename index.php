<?php

require('controller/frontend.php');

try {    
    if (isset($_GET['action'])) {
        switch ($_GET['action']){
            case 'detailActivity' :
                listActivity($_GET['id']);
                break;
            case 'passport' :
                viewPassport();
                break;
            case 'activitiesCountry' :
                if (!isset($_GET['tpActivity'])) {
                    $_GET['tpActivity']='Tourisme';
                };
                if (!isset($_GET['idActivity']) OR ($_GET['idActivity']=='firstId')) {
                    $_GET['idActivity'] = firstIdActivityCountry($_GET['id'], $_GET['tpActivity']);
                }
                listActivitiesCountry($_GET['id'], $_GET['tpActivity'], $_GET['idActivity']);
                break;
        }
    } else {        
        $id = firstIdActivity();
        listActivity($id);
    }
}

catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage();
}