<?php
require_once('Manager.php');

class CountryManager extends Manager {
    public function getListCountryUsable() {
        $db = $this->dbConnect();
        $countryUsable = $db->query('SELECT id, country, flag FROM countries WHERE view = 1');
        return $countryUsable;
        
    }
    
    public function getListCountryUnusable() {
        $db = $this->dbConnect();
        $countryUnusable = $db->query('SELECT id, country, flag, vignette FROM countries WHERE view = 0');
        return $countryUnusable;        
    }
    
    public function getCountry($idCountry) {
        $db = $this->dbConnect();
        $country = $db->prepare('SELECT id, country, flag, vignette, view FROM countries WHERE id = ?');
        $country->execute(array($idCountry));
        return $country;
    }
    
    public function uploadVignette($files, $post) {
        $verif = true;
        if(isset($_FILES["vignette"]) && $_FILES["vignette"]["error"] == 0) {
            $orignName = $files['vignette']['name'];
            $elementsPath = pathinfo("$orignName");
            $extentionFile = $elementsPath["extension"];
            $extensionAuthorized = array("png");
            if (!(in_array($extentionFile, $extensionAuthorized))) {
                $verif = false;
            } else {
                $destinationDirectory = "c:/xampp/htdocs/Projet final/public/img/passport/";
                $destinationName = "vignette_".$post['idCountry'].".".$extentionFile;
                $post['vignette'] = $destinationName;
                if (!move_uploaded_file($files["vignette"]["tmp_name"], $destinationDirectory.$destinationName)) {
                    $verif = false;
                }
            }   
        }
        if ($verif) {
            $db = $this->dbConnect();
            $country = $db->prepare('UPDATE countries SET view = ?, vignette = ? WHERE id = ?');
            $country->execute(array($post['view'], $post['vignette'], $post['idCountry']));
            $country->closeCursor();
        }
    }
}