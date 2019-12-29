<?php
require_once('model/SecurityManager.php');

function checkContent($content) {
    $contentChecked = htmlspecialchars($content);
    $contentChecked = stripcslashes($contentChecked);
    $contentChecked = strip_tags($contentChecked);
    return $contentChecked;
}

function checkAccess($login, $password) {
    $securityManager = new SecurityManager();
    $checkAccess = $securityManager->checkAccessDashboard($login, $password);
    return $checkAccess;
}