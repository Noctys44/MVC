<?php


require_once('Controller/Controller.php');


try{
    if(isset($_GET['page']))
    {
        if($_GET['page'] == "home"){
            home();
        } else if($_GET['page'] == "avis"){
            avis();
        } else {
        throw new Exception('Cette page a été supprimée');
    } 
    
    }else {
        home();
    }
}catch(Exception $e){
    echo $e->getMessage();
}

