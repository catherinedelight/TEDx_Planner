<?php
//connect to form controller
include_once (dirname(__FILE__)).'/../controllers/form_controller.php';

$details = getDetails();

foreach($details as $key => $values){}


$connection = new mysqli(SERVER,USERNAME,PASSWD,DATABASE);

if ($connection->connect_error) die($connection->connect_error);


if(isset($_POST['login'])){
// Grab form inputs
 $user= $_POST['user'];
$pword = $_POST['pword'];

$sql = "SELECT * FROM `tedusers`where username = '$user' limit 1";

$result = mysqli_query($connection, $sql);
if ($result){
if ($result && mysqli_num_rows($result)> 0){
$data = mysqli_fetch_ASSOC($result);
if ( $data ['password'] === $pword){

header("Location: profile.php?user_id=". $values['user_id'] );   
die;
} 

}

echo '<h6 style = "color:red;">'."Invalid Username or password provided". "</h6>";
}

}
?>
