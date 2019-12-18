<?php
require_once('model/ActivityManager.php');

function listActivity(){
    $activityManager = new ActivityManager();
    $activity = $activityManager->getActivity();
    
    require ('view/frontend/home.php');
}