<?php
//connect to form controller
include_once (dirname(__FILE__)).'/../controllers/form_controller.php';




if(isset($_POST['Submit'])){
    // Grab form inputs
    $first_name  = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $event_name = $_POST['tedx_name'];
    $email= $_POST['email'];
    $username = $_POST['username'];
    $password= $_POST['password'];
    $confpassword= $_POST['confpassword'];

    $about = "";
    $role = "";
    $country = "";
    $address = "";
    $Phone = "";

    $twitter = "";
    $facebook = "";
    $instagram = "";
    $linkedin = "";


    //since we have an auto increment use mysqli_insert_id function to its value to a variable
   
    
    // create a new user
    $newForm =  createForm ($about,$first_name ,$last_name,$event_name,$role,$country,$address,$Phone,$email,$username, $password,$confpassword,$twitter, $facebook, $instagram, $linkedin);
    if($newForm){
        header("location: ../login.php");
    
	}
	           
}

?>
