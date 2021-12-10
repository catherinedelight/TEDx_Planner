<?php
//connect to the form class
include_once (dirname(__FILE__)).'/../classes/Form_class.php';

// Inserting a new user
function createForm ($about,$first_name ,$last_name,$event_name,$role,$country,$address,$Phone,$email,$username, $password,$confpassword,$twitter, $facebook, $instagram, $linkedin){
    // Create new Form object
    $form = new Form;

    // Run query
    $runQuery = $form->create($about,$first_name ,$last_name,$event_name,$role,$country,$address,$Phone,$email,$username, $password,$confpassword,$twitter, $facebook, $instagram, $linkedin);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }


    }
    
    
    


?>