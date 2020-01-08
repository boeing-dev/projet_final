<?php
require_once('Manager.php');

class DetailManager extends Manager {
    public function getDetailActivity($id) {
        $db = $this->dbConnect();
        $detail = $db->prepare('SELECT activity.id, activities.typeActivity, activity.title, activity.town, frequencies.frequency, activity.timetable, activity.price, activity.information, activity.description,  activity.photo, activity.visibility FROM activity 
        INNER JOIN activities ON activity.typeActivity = activities.id 
        INNER JOIN frequencies ON activity.frequency = frequencies.id
        WHERE activity.id = ?');
        $detail->execute(array($id));
        
        return $detail;
    }
}