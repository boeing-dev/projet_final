<?php
require_once('Manager.php');

class ActivityManager extends Manager {
    public function getActivity(){
        $db = $this->dbConnect();
        $activity = $db->query('SELECT activity.id, activities.typeActivity, activity.title, activity.town, activity.localisation, countries.flag, frequencies.frequency, activity.timetable, activity.price, activity.information, activity.description, activity.date_entry, activity.note, activity.photo FROM activity 
        INNER JOIN countries ON activity.country = countries.id 
        INNER JOIN activities ON activity.typeActivity = activities.id 
        INNER JOIN frequencies ON activity.frequency = frequencies.id');
        
        return $activity;       
    }
}

        