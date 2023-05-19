<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard - Evento </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="addmem.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  
  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>
</head>

<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <h2>Evento</h2>
          </a>

        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Good Morning</h1>
            <h3 class="welcome-sub-text">Welcome to Your Dashboard By Evento </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">

          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
              aria-labelledby="notificationDropdown">

              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
              aria-labelledby="countDropdown">

              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../event/assets/img/team/team-3.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">CEO , Aryan </p>
                  <p class="fw-light small-text mb-0">Welcome to Evento</p>
                </div>
              </a>


            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/user.png" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-xs rounded-circle" src="images/user.png" alt="Profile image">
               
              </div>
              <a href="pages/samples/login.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
                Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a href="../index.html"class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border me-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab"
              aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
              aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
            aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Guest List</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
              aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Guest List</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../Dashboard/pages/ui-features/Guest_list.html">Manage Guest List</a>
                </li>

              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Activity & Data</li>
          <li class="nav-item">

            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href=".">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">To Do List</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/todo.html">Manage To Do </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Event Activity </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/timeline.html">Timeline </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item nav-category">Details</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.php"> User Information </a></li>
              </ul>
            </div>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab"
                        aria-controls="overview" aria-selected="true">Overview</a>
                    </li>

                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">



                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded table-darkBGImg">
                          <div class="card-body">
                            <div class="col-sm-8">
                              <h3 class="text-white upgrade-info mb-0">
                                Enhance your <span class="fw-bold">Experience</span> for Event Hosting
                              </h3>
                              <a href="../event/index.html" class="btn btn-info upgrade-btn">Home</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                              <div>
                                <h4 class="card-title card-title-dash">Guest List</h4>
                              </div>
                              <div>
                                <div class="form-popup" id="myForm">
                                  <form action="../forms/addmem.php" class="form-container" method="post">
                                    <h1>Add Member</h1>
                                
                                    <label for="guestname"><b>Enter Guest Name</b></label>
                                    <input type="text" placeholder="Enter Name" name="guestname" required>
                                    <label for="guestnumber"><b>Phone Number</b></label> 
                                    <input type="number" placeholder="Enter Phone Number" name="guestnumber" required>
                                    <label for="guestemail"><b>Email</b></label>
                                    <input type="text" placeholder="Enter Email" name="guestemail" required>
                                    
                                
                                    
                                
                                    <input type="submit" name="submit" class="btn" value="Add Guest"> 
                                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                  </form>
                                </div>
                    
                                <button class="btn btn-primary btn-lg text-white mb-0 me-0" onclick="openForm()" type="button"><i
                                    class="mdi mdi-account-plus"></i>Add new member</button> 
                              </div>
                            </div>
                            <div class="table-responsive  mt-1">
                              <table class="table select-table">
                                <thead>
                                  <tr>
                                    
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $dbHost = '127.0.0.1';//or localhost
$dbName = 'evento'; // your db_name
$dbUsername = 'root'; // root by default for localhost 
$dbPassword = '';  // by default empty for localhost

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from guestlist";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
     
        while($row = mysqli_fetch_array($result)){
          echo '<tr>
          <td>
            
                <h6>'.$row['guestname']. '</h6>
              </div>
            </div>
          </td>
          <td>
            <h6>'.$row['guestemail'].'</h6>

          </td>
          <td>
            <div>

              <h6>'.$row['guestnumber'].'</h6>
            </div>
          </td>
          
        </tr>';
                
                /*echo " " . $row['guestname'];
                echo " " . $row['age'];
                echo " " . $row['address'];
                echo " " . $row['series'];   */
           
        }
      
        // Free result set
        mysqli_free_result($result);
    } 
    else{
        echo "No records could be retrieved.";
    }
}
                                  ?>
                                  
                                   <!--tr>
                                    <td>
                                      <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                            class="input-helper"></i></label>
                                      </div>
                                    </td>
                                        <td>
                                      
                                          <h6>Guest 2</h6>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <h6>Guest_2_@example.com</h6>

                                    </td>
                                    <td>
                                      <div>
                                        <h6>99XXx xxxxx</h6>
                                      </div>
                                    </td>
                                    
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                            class="input-helper"></i></label>
                                      </div>
                                    </td>
                                    <td>
                                      
                                          <h6>Guest 3</h6>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <h6>Guest_3_@example.com</h6>

                                    </td>
                                    <td>
                                      <div>
                                        <h6>99XXx xxxxx</h6>
                                      </div>
                                    </td>
                                    
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                            class="input-helper"></i></label>
                                      </div>
                                    </td>
                                    <td>
                                      
                                          <h6>Guest 4</h6>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <h6>Guest_4_@example.com</h6>

                                    </td>
                                    <td>
                                      <div>
                                        <h6>99XXx xxxxx</h6>
                                      </div>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                            class="input-helper"></i></label>
                                      </div>
                                    </td>
                                    <td>
                                      
                                        
                                          <h6>Guest 5</h6>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <h6>Guest_5_@example.com</h6>

                                    </td>
                                    <td>
                                      <div>
                                        <h6>99XXx xxxxx</h6>
                                      </div>
                                    </td>
                                    
                                  </tr-->
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row flex-grow">
                      <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body card-rounded">
                            <h4 class="card-title  card-title-dash">Event List</h4>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Event 1
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Date</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Event 2
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Date</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Event 3
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Date</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                              <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  Event 4
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">Date</p>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="list align-items-center pt-3">
                              <div class="wrapper w-100">
                                <p class="mb-0">
                                  <a href="#" class="fw-bold text-primary">Show all <i
                                      class="mdi mdi-arrow-right ms-2"></i></a>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                              <h4 class="card-title card-title-dash">Timeline for Event</h4>

                            </div>
                            <ul class="bullet-line-list">
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Activity Name</span> Tag Line</div>
                                  <p>Time</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Activity Name</span> Tag Line</div>
                                  <p>Time</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Activity Name</span> Tag Line</div>
                                  <p>Time</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Activity Name</span> Tag Line</div>
                                  <p>Time</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Activity Name</span> Tag Line</div>
                                  <p>Time</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Activity Name</span> Tag Line</div>
                                  <p>TIme</p>
                                </div>
                              </li>
                              <li>
                                <div class="d-flex justify-content-between">
                                  <div><span class="text-light-green">Activity Name</span> Tag Line</div>
                                  <p>Time</p>
                                </div>
                              </li>
                            </ul>
                            <div class="list align-items-center pt-3">
                              <div class="wrapper w-100">
                                <p class="mb-0">
                                  <a href="#" class="fw-bold text-primary">Show all <i
                                      class="mdi mdi-arrow-right ms-2"></i></a>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-flex flex-column">
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="d-flex justify-content-between align-items-center">
                                  <h4 class="card-title card-title-dash">Todo list</h4>
                                  <div class="add-items d-flex mb-0">
                                    <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                    <button
                                      class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i
                                        class="mdi mdi-plus"></i></button>
                                  </div>
                                </div>
                                <div class="list-wrapper">
                                  <ul class="todo-list todo-list-rounded">
                                    <li class="d-block">
                                      <div class="form-check w-100">
                                        <label class="form-check-label">
                                          <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of
                                          the printing <i class="input-helper rounded"></i>
                                        </label>
                                        <div class="d-flex mt-2">
                                          <div class="ps-4 text-small me-3">24 June 2020</div>
                                          <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                          <i class="mdi mdi-flag ms-2 flag-color"></i>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="d-block">
                                      <div class="form-check w-100">
                                        <label class="form-check-label">
                                          <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of
                                          the printing <i class="input-helper rounded"></i>
                                        </label>
                                        <div class="d-flex mt-2">
                                          <div class="ps-4 text-small me-3">23 June 2020</div>
                                          <div class="badge badge-opacity-success me-3">Done</div>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="form-check w-100">
                                        <label class="form-check-label">
                                          <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of
                                          the printing <i class="input-helper rounded"></i>
                                        </label>
                                        <div class="d-flex mt-2">
                                          <div class="ps-4 text-small me-3">24 June 2020</div>
                                          <div class="badge badge-opacity-success me-3">Done</div>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="border-bottom-0">
                                      <div class="form-check w-100">
                                        <label class="form-check-label">
                                          <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of
                                          the printing <i class="input-helper rounded"></i>
                                        </label>
                                        <div class="d-flex mt-2">
                                          <div class="ps-4 text-small me-3">24 June 2020</div>
                                          <div class="badge badge-opacity-danger me-3">Expired</div>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright Evento © 2021. All rights
          reserved.</span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>