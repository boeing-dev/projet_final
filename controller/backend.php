<?php
require_once('model/ActivityManager.php');
require_once('model/DetailManager.php');
require_once('model/PassportManager.php');

function listActivitiesBack() {
    $activityManager = new ActivityManager();
    $activity = $activityManager->getActivity();
    require ('view/backend/dashboard.php');
}