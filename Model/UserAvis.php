<?php

require_once('Avis.php');

class UserAvis extends Avis
{
    public function getAvis()
    {
        $bddAvis = $this->connexion();
        $avis = $bddAvis->query("SELECT * FROM avis ORDER BY note DESC");
        return $avis;
    }

}