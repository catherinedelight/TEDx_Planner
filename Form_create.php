<?php
//connect to form controller
include_once (dirname(__FILE__)).'../settings/db_connection.php';

        $connection = new mysqli(SERVER,USERNAME,PASSWD,DATABASE);

        if ($connection->connect_error) die($connection->connect_error);

        $name_error="";
        $psw_error="";


if(isset($_POST['submit'])){
    // Grab form inputs
    $first_name  = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $event_name = $_POST['tedx_name'];
    $email= $_POST['email'];
    $username = $_POST['username'];
    $password= $_POST['password'];
    $confpassword= $_POST['confpassword'];

    //since we have an auto increment use mysqli_insert_id function to its value to a variable
    $user_id = mysqli_insert_id($connection);
    

    
    
    if(($password==$confpassword) && preg_match("/^[a-zA-Z-' ]*$/",$first_name) && preg_match("/^[a-zA-Z-' ]*$/",$last_name) ){

		$values= "INSERT INTO users VALUES". "('$user_id','$first_name' ,'$last_name','$event_name','$email','$username', '$password','$confpassword')";

	$insert=mysqli_query($connection,$values);
	if(!$insert){
                echo mysqli_error($connection);
                 }
                 
                 else{
					header("location: ./login.php");
                 } 	
	}

	else if($password!=$confpassword) {
		$psw_error="!! Passwords do not match";

		
	}
	else if(!preg_match("/^[a-zA-Z-' ]*$/",$first_name ) || !preg_match("/^[a-zA-Z-' ]*$/",$last_name )){
		$name_error = "!! Only letters are allowed";

	}
	           
}

?>

