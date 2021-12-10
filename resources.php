<?php
//connect to form controller
include_once (dirname(__FILE__)).'../controllers/form_controller.php';

$details = getDetails();

foreach($details as $key => $values){}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TEDx Resources</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/tedxlogo.png" rel="icon">
  <link href="assets/img/tedxlogo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="dashboard.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/tedxlogo.png" alt="">
                  <span class="d-none d-lg-block">Planners</span>
                </a>
              </div><!-- End Logo -->
    <div class="container">
    <div class="card mb-3">
        <div class="card-body">
        <div class="row">
            <div class="twelve column" style="margin-top: 5%">
                <h4>Upload your Resources</h4>

                <br>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file1" >
                    <br><br>
                    <input type="submit" name="submit" value="Upload" class="btn btn-info"/>
                   <a href="view.php" class="btn btn-info">VIEW FILES</a>
                   <br><br>
                   <div class="col-12">
                      <a button class="btn btn-primary w-100" type="submit" class="btn btn-info" href="profile.php?user_id=<?= $values['user_id']?>">Back</button></a>

                     
                    </div>

                </form>
              

            </div>
        </div>
    </div>

    <?php if(isset($_GET['st'])) { ?>
                <div class="alert alert-danger text-center">
                <?php if ($_GET['st'] == 'success') {
                        echo "File Uploaded Successfully!";
                    }
                    else
                    {
                        echo 'Invalid File Extension!';
                    } ?>
                </div>
            <?php } ?>

  </main>


</body>
</html>




