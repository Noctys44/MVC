<?php

require_once('Manager.php');

class UserManager extends Manager
{
    public function getUser()
    {
        $bdd = $this->getPdo();
        $user = $bdd->query("SELECT * FROM membre ORDER BY nom ASC");
        return $user;
    }
}



