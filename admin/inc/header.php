<?php
    include_once('../controller/auth.php');
   
    session_start();
    if(empty($_SESSION['user_name']))
    {
        $rediurect=new admin();
        $rediurect->redirect($_SESSION['user_name']);
    }elseif(isset($_POST['logout']))
        {
            $login=new admin();
            $login->logout();

     }
     $Data=new admin();
     $admin=$Data->getadmin();
   ?>
<!DOCTYPE html>
 <html lang="en">
    <head> 
            <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Admin Panel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../asset/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../asset/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="../asset/css/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="../asset/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="../asset/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="../asset/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="../asset/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../asset/css/custom.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../asset/css/font-awesome.min.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="../asset/js/semantic.min.css" />
      
   </head>

   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="#"><img class="logo_icon img-responsive" src="../asset/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="../../Asset/img/admin/<?=$admin['img']?>" alt="#" /></div>
                        <div class="user_info">
                           <h6> <?php echo $_SESSION['user_name'];?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="index.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                       
                     </li>
                     <li><a href="list_student.php"><i class="fa fa-users orange_color"></i> <span>Student</span></a></li>
                     
                     <li><a href="list_teacher.php"><i class="fa fa-briefcase purple_color2"></i> <span>Teacher</span></a></li>
                     <li><a href="list_subject.php"><i class="fa fa-users orange_color"></i> <span>Courses</span></a></li>
                    
                     <!-- <li>
                        <a href="contact.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                     </li> -->
                  
                     <li><a href="map.php"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                     <li><a href="profile.php"><i class="fa fa-bar-chart-o green_color"></i> <span>Profile</span></a></li>
                     <li><a href="edit_profile.php"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
                  </ul>
               </div>
         </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="../../index.php"><h1 style="color:white;font-size:40px">STMT</h1>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="../../Asset/img/admin/<?=$admin['img']?>" alt="#" /><span class="name_user"><?php echo $_SESSION['user_name'];?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.php">My Profile</a>
                                       <a class="dropdown-item" href="edit_profile.php">Settings</a>
                                       <a class="dropdown-item" href="index.php">Help</a>
                                     <form method="POST">
                                       <button   class="btn btn-danger " name="logout" type="submit" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></button>
                                 </form>
                                    
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->

                     <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->

      