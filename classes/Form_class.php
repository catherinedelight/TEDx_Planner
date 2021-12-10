<?php
//connect to database class
require_once (dirname(__FILE__)).'/../settings/db_connection.php';

class Form extends db_connection {
    public function create($first_name ,$last_name,$event_name,$email,$username, $password,$confpassword){
        // sql query
        $sql = "INSERT INTO `tedusers`(`first_name`, `last_name`,`event_name`,`email`,`username`, `password`,`confpassword`) VALUES ('$first_name' ,'$last_name','$event_name','$email','$username', '$password','$confpassword')";

        // run query 
        return $this->db_query($sql);
    }

    public function Details(){
        //sql query
        $sql = "SELECT * FROM `tedusers`";

        //run query
        return $this->db_query($sql);
    }

    public function getSingleDetail($user_id){
        // sql query
        $sql = "SELECT * FROM `tedusers` WHERE `user_id`='$user_id'";

        // run query
        return $this->db_query($sql);
    }
    
    public function update($user_id, $about, $first_name, $last_name, $event_name, $role, $country, $address, $Phone, $email,$twitter,$facebook,$instagram,$linkedin, $profile_pc){
        // sql query
        $sql = "UPDATE `tedusers` SET `about`='$about',`first_name`='$first_name',`last_name`='$last_name',`event_name`='$event_name',`role`='$role',`country`='$country',`address`='$address',`Phone`='$Phone', `email`='$email', `twitter`='$twitter', `facebook`='$facebook', `instagram`='$instagram', `linkedin`='$linkedin',  `profile_pc`='$profile_pc'WHERE `user_id`='$user_id'";

        // run query
        return $this->db_query($sql);
    }   

    public function updatePassword($user_id,$password,$confpassword){
        // sql query
        $sql = "UPDATE `tedusers` SET `password`='$password'`confpassword`='$confpassword' WHERE `user_id`='$user_id'";

        // run query
        return $this->db_query($sql);
    }   
}



?>
