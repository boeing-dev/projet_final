<?php
require_once('Manager.php');

class ActivityManager extends Manager {
    public function getActivity() {
        $db = $this->dbConnect();
        $activity = $db->query('SELECT activity.id, activities.typeActivity, activity.title, activity.town, activity.localisation, countries.flag, activity.note, activity.photo FROM activity 
        INNER JOIN countries ON activity.country = countries.id 
        INNER JOIN activities ON activity.typeActivity = activities.id 
        INNER JOIN frequencies ON activity.frequency = frequencies.id');

        return $activity;       
    } 
    
    public function getFirstId() {
        $db = $this->dbConnect();
        $firstActivity = $db->query('SELECT id FROM activity');
        $id = $firstActivity->fetch();
        return $id['id'];
    }
    
    public function getListActivitiesCountry($idCountry, $typeActivity) {
        $db = $this->dbConnect();
        $activities = $db->prepare("SELECT activity.id, activities.typeActivity, activity.title, activity.town, activity.localisation, activity.country, countries.flag, activity.note, activity.photo FROM activity 
        INNER JOIN countries ON activity.country = countries.id 
        INNER JOIN activities ON activity.typeActivity = activities.id 
        INNER JOIN frequencies ON activity.frequency = frequencies.id 
        WHERE activity.country = ? AND activities.typeActivity = ?");
        $activities->execute(array($idCountry, $typeActivity));
        
        return $activities;      
    }
    
    public function getFirstIdCountry($idCountry, $idActivity) {
        $db = $this->dbConnect();
        $firstActivityCountry = $db->prepare("SELECT activity.id, activities.typeActivity FROM activity
        INNER JOIN activities ON activity.typeActivity = activities.id
        WHERE activity.country = ? AND activities.typeActivity = ?");
        $firstActivityCountry->execute(array($idCountry, $idActivity));
        $id = $firstActivityCountry->fetch();
        return $id['id'];
    }
}




        