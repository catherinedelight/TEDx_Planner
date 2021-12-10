<?php

include_once (dirname(__FILE__)).'/../controllers/form_controller.php';

$details = getDetails();

foreach($details as $key => $values){}


// check if button is clicked
if(isset($_POST['Submit'])){
    // Grab form data

    $profile_pc =$_FILES['file'];

    

    $user_id = $_POST['user_id'];

    $about = $_POST['about'];

    $first_name  = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $event_name = $_POST['event_name'];

    $role= $_POST['role'];

    $country= $_POST['country'];

    $address = $_POST['address'];

    $Phone =  $_POST['Phone'];

    $email= $_POST['email'];

    $twitter =  $_POST['twitter'];

    $facebook =  $_POST['facebook'];

    $instagram =  $_POST['instagram'];

    $linkedin =  $_POST['linkedin'];
   


    

    // update post if empty
    $updatedProfile =updateForm($user_id, $about, $first_name, $last_name, $event_name, $role, $country, $address, $Phone, $email,$twitter,$facebook,$instagram,$linkedin,$profile_pc);
    if($updatedProfile){
         
    header("Location: ../profile.php?user_id=". $values['user_id'] );   
    die; 
        
    }else{
       return false;
    }
}
