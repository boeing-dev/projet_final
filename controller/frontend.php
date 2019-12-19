<?php
require_once('model/ActivityManager.php');
require_once('model/DetailManager.php');


function listActivity($id) {
    $activityManager = new ActivityManager();
    $activity = $activityManager->getActivity();
    $detailManager = new DetailManager();
    $detail = $detailManager->getDetailActivity($id);
    
    require ('view/frontend/home.php');
}

function firstIdActivity() {
    $activityManager = new ActivityManager();
    $id = $activityManager->getFirstId();
    return $id;
}



