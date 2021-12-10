<?php
//connect to database class
require_once (dirname(__FILE__)).'/../settings/db_connection.php';

class Form extends db_connection {
    public function create($about,$first_name ,$last_name,$event_name,$role,$country,$address,$Phone,$email,$username, $password,$confpassword,$twitter, $facebook, $instagram, $linkedin){
        // sql query
        $sql = "INSERT INTO `tedusers`(`user_id`, `about`, `first_name`, `last_name`, `event_name`, `role`, `country`, `address`, `Phone`, `email`, `username`, `password`, `confpassword`, `twitter`, `facebook`, `instagram`, `linkedin`) VALUES ('$about','$first_name' ,'$last_name','$event_name','$role','$country','$address','$Phone','$email','$username', '$password','$confpassword','$twitter', '$facebook', '$instagram', '$linkedin')";

        // run query 
        return $this->db_query($sql);
    }

    
    


    
}

?>