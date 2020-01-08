<?php
require_once('Manager.php');

class TypeActivityManager extends Manager {
    public function getTypeActivity() {
        $db = $this->dbConnect();
        $typeActivity = $db->query('SELECT * FROM activities');
        return $typeActivity;
    }
}