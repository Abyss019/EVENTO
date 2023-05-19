<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User Details</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/user.png" alt="logo">
              </div>
              <h2>Hello!</h2>
              <?php
              $dbHost = '127.0.0.1';//or localhost
              $dbName = 'evento'; // your db_name
              $dbUsername = 'root'; // root by default for localhost 
              $dbPassword = '';  // by default empty for localhost
              
              $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
              if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }
              

              
              $sql = "select * from user";

if($result = mysqli_query($conn, $sql))
{
    if(mysqli_num_rows($result) > 0)
    {
      $row = mysqli_fetch_array($result);
        
          echo '<h3 class="fw-light">Name: '.$row['fullname']. '</h3>
  
          <h3 class="fw-light>Email: '.$row['email'].'</h3>

          <h3 class="fw-light> Password: '.$row['password'].'</h3>

              <h3 class="fw-light>Phone: '.$row['mobile'].'</h3>';}}
              ?>
            
         
              
              
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="logout">
                  <a href="../../../index.html" class="auth-link text-black">Logout</a>
                </div>
                </div>
                </div>
                <div class="text-center mt-4 fw-light">
                  Click here to go back: <a href="../../index.php" class="text-primary">Back</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>