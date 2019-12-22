<?php
require_once('Manager.php');

class PassportManager extends Manager {
    public function getListCountries() {
        $db = $this->dbConnect();
        $countries = $db->query("SELECT id, country, vignette FROM countries WHERE view=1 ORDER BY country ASC");
        return $countries;
    }
}