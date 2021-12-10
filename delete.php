<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>delete</title>
</head>
<body>
    <?php

include_once (dirname(__FILE__)).'../controllers/form_controller.php';

$details = getDetails();

foreach($details as $key => $values){}

$connection = new mysqli(SERVER,USERNAME,PASSWD,DATABASE);

if ($connection->connect_error) die($connection->connect_error);

    $sql = "select * from tbl_files";
    $result = mysqli_query($connection, $sql);



    if(isset($_GET['delid'])){
        $id=$_GET['delid']; // get the id from the URL
        
        //delete record corresponding to the id
        $delqry="delete from tbl_files where id=$id";

        $result=mysqli_query($connection,$delqry); 

        if($result){
            //echo "success";
            header('location:view.php');
        
    }
    
    else{
       die(mysqli_error($connection)); 
        
    }
    

    }
                   

    ?>
</body>
</html>