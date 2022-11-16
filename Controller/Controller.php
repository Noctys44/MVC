<?php

require_once('./Model/UserManager.php');
require_once('./Model/UserAvis.php');

function home()
{
    $users = new UserManager;
    $allUser = $users->getUser();
    require_once('./View/UserView.php');
}

function avis()
{
    $avis1 = new UserAvis;
    $allAvis = $avis1->getAvis();
    require('./View/UserAvis.php');
}


