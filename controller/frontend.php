<?php
require_once('model/ActivityManager.php');
require_once('model/DetailManager.php');
require_once('model/PassportManager.php');


function listActivity($id) {
    $activityManager = new ActivityManager();
    $activity = $activityManager->getActivities();
    $detailManager = new DetailManager();
    $detail = $detailManager->getDetailActivity($id);
    
    require ('view/frontend/home.php');
}

function firstIdActivity() {
    $activityManager = new ActivityManager();
    $id = $activityManager->getFirstId();
    return $id;
}

function viewPassport() {
    $passportManager = new PassportManager();
    $countries = $passportManager->getListCountries();
    
    require ('view/frontend/passport.php');
}

function ListActivitiesCountry($idCountry, $typeActivity, $idActivity) {
    $activityManager = new ActivityManager();
    $listActivitiesCountry = $activityManager->getListActivitiesCountry($idCountry, $typeActivity);
    $detailManager = new DetailManager();
    $detail = $detailManager->getDetailActivity($idActivity);
    
    require ('view/frontend/activitiesCountry.php');
}

function firstIdActivityCountry($idCountry, $idActivity) {
    $activityManager = new ActivityManager();
    $id = $activityManager->getFirstIdCountry($idCountry, $idActivity);
    return $id;
}



