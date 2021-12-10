<?php


//connect to form controller
include_once (dirname(__FILE__)).'/../controllers/form_controller.php';



$connection = new mysqli(SERVER,USERNAME,PASSWD,DATABASE);

    if ($connection->connect_error) die($connection->connect_error);

// empty variables for error to be thrown after validation
$psw_error="";
$name_error="";
$email_error = "";
$username_error = "";


if(isset($_POST['Submit'])){
    // Grab form inputs
    $first_name  = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $event_name = $_POST['tedx_name'];
    $email= $_POST['email'];
    $username = $_POST['username'];
    $password= $_POST['password'];
    $confpassword= $_POST['confpassword'];

    $sql = "SELECT * FROM `tedusers`where email = '$email' limit 1 ";
    $result = mysqli_query($connection, $sql);
    if ($result){
        if ($result && mysqli_num_rows($result)> 0){
            $data = mysqli_fetch_ASSOC($result);
        }
    }        


   
    if(preg_match("/^[a-zA-Z-' ]*$/",$first_name) && preg_match("/^[a-zA-Z-' ]*$/",$last_name)&& ($data['email']!=$email)&& ($data['username']!=$username) && ($data['password']!=$password)){
    // create a new user
    $newForm =  createForm ($first_name ,$last_name ,$event_name,$email,$username, $password,$confpassword);
    if($newForm){
        header("location: login.php");
    
	}
	           
}

else if(!preg_match("/^[a-zA-Z-' ]*$/",$first_name)){
    $name_error = "!! Only letters are allowed";

}
else if(!preg_match("/^[a-zA-Z-' ]*$/",$last_name)){
    $name_error = "!! Only letters are allowed";

}

else if($data ['email'] === $email){
    $email_error = "!! This email already exist";

}
else if($data ['username'] === $username){
    $username_error  = "!! This Username is taken";



}else if($password!=$confpassword) {
    $psw_error="!! Passwords do not match";
}

}

?>

