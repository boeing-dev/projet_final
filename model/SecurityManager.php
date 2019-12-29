<?php
require_once('Manager.php');

class SecurityManager extends Manager {
    public function checkAccessDashboard($login, $password) {
        $db = $this->dbConnect();
        $user = $db->query('SELECT login, password FROM user');
        $data = $user->fetch();
        if (($data['login']===$login) AND ($data['password']===$password)) {
            return true;
        } else {
            return false;
        }
    }
}