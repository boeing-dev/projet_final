<?php

require('controller/frontend.php');
require('controller/security.php');

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
            case 'donation' :
                require ('view/frontend/donation.php');
                break;
            case 'connection' :
                require ('view/frontend/dashboardConnection.php');
                break;
            case 'login' :
                $login = checkContent($_POST['login']);
                $password = checkContent($_POST['password']);
                $accessDashboard = checkAccess($login, $password);
                if ($accessDashboard) {
                    require ('view/backend/dashboard.php');
                }
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