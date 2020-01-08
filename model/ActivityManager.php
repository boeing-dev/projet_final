<?php
require_once('Manager.php');

class ActivityManager extends Manager {
    public function getActivities() {
        $db = $this->dbConnect();
        $activity = $db->query('SELECT activity.id, activities.typeActivity, activity.title, activity.town, activity.localisation, countries.flag, activity.note, activity.photo, activity.visibility, activity.visibility FROM activity
        INNER JOIN countries ON activity.country = countries.id 
        INNER JOIN activities ON activity.typeActivity = activities.id'); 
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
    
    public function getActivity($idActivity) {
        $db = $this->dbConnect();
        $activity = $db->prepare('SELECT activity.id, activities.typeActivity, activity.title, activity.town, countries.flag, activity.description, activity.photo FROM activity
        INNER JOIN countries ON activity.country = countries.id 
        INNER JOIN activities ON activity.typeActivity = activities.id 
        WHERE activity.id = ?');
        $activity->execute(array($idActivity));
        return $activity;
    }
    
    public function setDeleteActivity($idActivityDeleted) {
        $db = $this->dbConnect();
        $activityDeleted = $db->prepare('DELETE FROM activity WHERE id = ?');
        $activityDeleted->execute(array($idActivityDeleted));
        $activityDeleted->closeCursor();
    }
    
    public function getViewActivity($id) {
        $db = $this->dbConnect();        
        $viewActivity = $db->prepare('SELECT activity.id, activity.title, activity.town, activity.localisation, activity.timetable, activity.price, activity.information, activity.note, activity.photo, activity.visibility, activity.description, activity.date_entry, frequencies.frequency, countries.country, activities.typeActivity, countries.flag, activity.typeActivity, activity.frequency, activity.country FROM activity 
        INNER JOIN countries ON activity.country = countries.id
        INNER JOIN activities ON activity.typeActivity = activities.id
        INNER JOIN frequencies ON activity.frequency = frequencies.id
        WHERE activity.id = ?');
        $viewActivity->execute(array($id));
        return $viewActivity;
    }
    
    public function setUpdateActivity($post, $file) {
        $verif = false;
        if(isset($file["photo"]) && $file["photo"]["error"] == 0) {
            $orignName = $file['photo']['name'];
            $elementsPath = pathinfo("$orignName");
            $extentionFile = $elementsPath["extension"];
            $extensionAuthorized = array("png");
            if (!(in_array($extentionFile, $extensionAuthorized))) {
                $verif = false;
            } else {
                $destinationDirectory = "c:/xampp/htdocs/Projet final/public/img/article/";
                $destinationName = "article".$post['id'].".".$extentionFile;
                $post['photo'] = $destinationName;
                $verif = true;
                if (!move_uploaded_file($file["photo"]["tmp_name"], $destinationDirectory.$destinationName)) {
                    $verif = false;
                }
            }   
        }
        $db = $this->dbConnect();
        if (isset($post['state'])) {
            $post['state']=1;
        } else {
            $post['state']=0;
        }
        $activity = $db->prepare('UPDATE activity SET typeActivity=?, title=?, town=?, country=?, frequency=?, timetable=?, price=?, information=?, note=?, description=?, visibility=?
        WHERE id=?');
        $activity->execute(array($post['tpActivity'], $post['title'], $post['town'], $post['country'], $post['frequency'], $post['timetable'], $post['price'], $post['information'], $post['note'], $post['description'], $post['state'], $post['id']));
        if ($verif) {
            $activity = $db->prepare('UPDATE activity SET photo=? WHERE id=?');
            $activity->execute(array($post['photo'], $post['id']));
        }
        $activity->closeCursor();
    }
    
    public function setAddActivity($post, $file) {
        $db = $this->dbConnect();        
        $verif = false;
        if (isset($post['state'])) {
            $post['state']=1;
        } else {
            $post['state']=0;
        }
        if (!$verif) {
            $post['photo']="photonc.png";
        }
        $activity = $db->prepare('INSERT INTO activity (typeActivity, title, town, localisation, country, frequency, timetable, price, information, date_entry, note, photo, visibility, description)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $activity->execute(array($post['tpActivity'], $post['title'], $post['town'], $post['localisation'], $post['country'], $post['frequency'], $post['timetable'], $post['price'], $post['information'], date("Y-m-d"), $post['note'], $post['photo'], $post['state'], $post['description']));
        $lastId = $db->lastInsertId();
        if(isset($file["photo"]) && $file["photo"]["error"] == 0) {
            $orignName = $file['photo']['name'];
            $elementsPath = pathinfo("$orignName");
            $extentionFile = $elementsPath["extension"];
            $extensionAuthorized = array("png");
            if (!(in_array($extentionFile, $extensionAuthorized))) {
                $verif = false;
            } else {
                $destinationDirectory = "c:/xampp/htdocs/Projet final/public/img/article/";
                $destinationName = "article".$lastId.".".$extentionFile;
                $post['photo'] = $destinationName;
                $verif = true;
                if (!move_uploaded_file($file["photo"]["tmp_name"], $destinationDirectory.$destinationName)) {
                    $verif = false;
                }
            }   
        }
        $activity->closeCursor();
    }
}




        