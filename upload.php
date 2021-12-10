<?php
include_once (dirname(__FILE__)).'../controllers/form_controller.php';

$connection = new mysqli(SERVER,USERNAME,PASSWD,DATABASE);

if ($connection->connect_error) die($connection->connect_error);
//check if form is submitted
if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(id) as id from tbl_files';
            $result = mysqli_query($connection, $sql);
            
            
                $row = mysqli_fetch_array($result);
                $filename = $filename;

            //set target directory
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO tbl_files(filename, created) VALUES('$filename', '$created')";
            mysqli_query($connection, $sql);
            header("Location: resources.php?st=success");
        }
        else
        {
            header("Location: resources.php?st=error");
        }
    }
    else
        header("Location: resources.php");
}
?>