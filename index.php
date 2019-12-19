<?php

require('controller/frontend.php');

try {    
    if (isset($_GET['action'])) {
        switch ($_GET['action']){
            case 'detailActivity':
                listActivity($_GET['id']);
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