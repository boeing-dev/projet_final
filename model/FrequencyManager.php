<?php
require_once('Manager.php');

class FrequencyManager extends Manager {
    public function getFrequencies() {
        $db = $this->dbConnect();
        $frequency = $db->query('SELECT * FROM frequencies');
        return $frequency;
    }
}