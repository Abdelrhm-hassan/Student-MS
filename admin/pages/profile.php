
<!-- Header -->
<?php 
  include_once('../inc/header.php');
    include_once('../controller/auth.php');
    $get_admin=new admin();
  
    $show=$get_admin->getadmin();
   
   
?>
<style>
    .socail{

        color:lightskyblue;
        padding: 15px;
        font-size: 24px;
    }


</style>
    <!-- content  -->

        <!-- dashboard inner -->
        <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Profile</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Admin Info</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <div class="full dis_flex center_text">
                                          <div class="profile_img">
                                            <img width="180" class="rounded-circle" src="../../Asset/img/admin/<?php echo $show['img'] ?>" alt="#" />
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                          <div class="profile_contant">
                                             <div class="contact_inner">
                                                <h3><?php echo $show['name'] ?></h3>
                                                <p class="skill"><strong>Speacialization: Admin</strong></p>
                                                <ul class="list-unstyled">
                                                <li class="skill">Phone <i class="fa fa-phone"></i> :  <?php echo $show['phone'] ?></li>
                                                <li class="skill">City <i class="fa fa-home "></i> :  <?php echo $show['address'] ?></li>
                                                <li class="skill">Email <i class="fa fa-envelope-o  "></i> :  <?php echo $show['email'] ?></li>
                                               
                                                </ul>
                                             </div>
                                            
                                          </div>
                                       </div>
                            
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2"></div>
                        </div>
                        <!-- end row -->
                     
                 


<!--  /content  -->











<!-- Footer -->
<?php
      include_once('../inc/footer.php');

    ?>