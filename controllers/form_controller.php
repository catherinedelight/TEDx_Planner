<?php
//connect to the form class
include_once (dirname(__FILE__)).'/../classes/Form_class.php';

// Inserting a new user
function createForm ($first_name ,$last_name ,$event_name,$email,$username, $password,$confpassword){
    // Create new Form object
    $form = new Form;

    // Run query
    $runQuery = $form->create($first_name ,$last_name ,$event_name,$email,$username, $password,$confpassword);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }


    }

    function getDetails(){
        // Create new form object
        $form = new Form;
    
        // Run query
        $runQuery = $form->Details();
    
        if($runQuery){
            $details = array();
            while($record = $form->db_fetch()){
                $details[] = $record;
            }
            return $details;
        }else{
            return false;
        }
    }

    function getSingleDetail($user_id){
        // Create new post object
        $form = new Form;
    
        // Run query
        $runQuery = $form->getSingleDetail($user_id);
    
        if($runQuery){
    
            $forms = $form->db_fetch();
            if(!empty($forms)){
                return $forms;
            }else{
                return [];
            }
            
        }else{
            return false;
        }
    }
    
    function updateForm($user_id, $about, $first_name, $last_name, $event_name, $role, $country, $address, $Phone, $email,$twitter,$facebook,$instagram,$linkedin,$profile_pc){
        // Create new form object
        $form = new Form;
    
        // Run query
        $runQuery = $form->update($user_id, $about, $first_name, $last_name, $event_name, $role, $country, $address, $Phone, $email,$twitter,$facebook,$instagram,$linkedin, $profile_pc);
    
        if($runQuery){
            return $runQuery;
        }else{
            return false;
        }
    }

    function updateFormPassword($user_id, $password,$confpassword){
        // Create new form object
        $form = new Form;
    
        // Run query
        $runQuery = $form->updatePassword($user_id, $password,$confpassword );
    
        if($runQuery){
            return $runQuery;
        }else{
            return false;
        }
    }
    
    


?>