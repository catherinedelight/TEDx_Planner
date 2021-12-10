<?php

include_once (dirname(__FILE__)).'/../controllers/form_controller.php';


$details = getDetails();

foreach($details as $key => $values){}

$connection = new mysqli(SERVER,USERNAME,PASSWD,DATABASE);

if ($connection->connect_error) die($connection->connect_error);

$psw_error1="";
$psw_error2="";
// check if button is clicked

if(isset($_POST['change_password'])){
    // Grab form data
    $user_id = $_POST['user_id'];
    $pword = $_POST['current_password'];
    $password = $_POST['password'];
    $confpassword= $_POST['confpassword'];

    $sql = "SELECT * FROM `tedusers`where `password` = '$pword' limit 1 ";
    $result = mysqli_query($connection, $sql);

    if ($result){
       
    if ($result['password']== $pword ){

        $passwordUpdate = updateFormPassword($user_id, $password,$confpassword);
        if($passwordUpdate){
         
            header("Location: ../profile.php?user_id=". $values['user_id'] );   
            die; 
                
            }else{
               return false;
            }

    }else if($result['password']!= $pword) {
        $psw_error1="Wrong Current password, Try again !";
        
        
    }
    else if($password!=$confpassword) {
        $psw_error2="!! Passwords do not match";
       
    }

}}