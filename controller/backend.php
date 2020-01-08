<?php
require_once('model/ActivityManager.php');
require_once('model/DetailManager.php');
require_once('model/PassportManager.php');
require_once('model/CountryManager.php');
require_once('model/FrequencyManager.php');
require_once('model/TypeActivityManager.php');

function listActivitiesBack() {
    $activityManager = new ActivityManager();
    $activity = $activityManager->getActivities();
    require ('view/backend/dashboard.php');
}

function deleteView($idActivity) {
    $activityManager = new ActivityManager();
    $activity = $activityManager->getActivity($idActivity);
    require('view/backend/deleteActivity.php');
}

function deleteActivity($idActivity) {
    $activityManager = new ActivityManager();
    $activityToDelete = $activityManager->setDeleteActivity($idActivity);
    listActivitiesBack();
}

function listCountryUsable() {
    $countryManager = new CountryManager();
    $listCountryUsable = $countryManager->getListCountryUsable();
    $listCountryUnusable = $countryManager->getListCountryUnusable();
    require('view/backend/listCountryManager.php');
}

function manageCountry($idCountry) {
    $countryManager = new CountryManager();
    $country = $countryManager->getCountry($idCountry);
    require('view/backend/modifyCountry.php');
} 

function modifyCountry($post, $files) {
    $countryManager = new CountryManager();
    $countryUpdate = $countryManager->uploadVignette($files, $post);
    listCountryUsable();
}

function viewActivity($id) {
    $activityManager = new ActivityManager();
    $activity = $activityManager->getViewActivity($id);
    require('view/backend/viewActivity.php');
}

function modifyActivity($id) {
    $activityManager = new ActivityManager();
    $activity = $activityManager->getViewActivity($id);
    $countryManager = new CountryManager();
    $country = $countryManager->getListCountryUsable();
    $frequencyManager = new FrequencyManager();
    $frequency = $frequencyManager->getFrequencies();
    $typeActivityManager = new TypeActivityManager();
    $typeActivity = $typeActivityManager->getTypeActivity();
    require('view/backend/modifyActivity.php');
}

function updateActivity($post, $file) {
    $activityManager = new ActivityManager();
    $activity = $activityManager->setUpdateActivity($post, $file);
    listActivitiesBack();
}

function newActivity() {
    $countryManager = new CountryManager();
    $country = $countryManager->getListCountryUsable();
    $frequencyManager = new FrequencyManager();
    $frequency = $frequencyManager->getFrequencies();
    $typeActivityManager = new TypeActivityManager();
    $tpActivity = $typeActivityManager->getTypeActivity();
    require('view/backend/newActivity.php');
}

function addActivity($post, $file) {
    $activityManager = new ActivityManager();
    $activity = $activityManager->setAddActivity($post, $file);
    listActivitiesBack();
}




























