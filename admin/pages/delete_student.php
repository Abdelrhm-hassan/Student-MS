
<!-- Header -->
<?php 
  include_once('../inc/header.php');
    include_once('../controller/student.php');
    $get_student=new student();  
    $show=$get_student->show($_GET['id']);
    if(isset($_POST['yes'])){
        $delete=$get_student->delete($_GET['id']);
       


    }
    
 
   
   
?>
<style>
    .socail{

        color:lightskyblue;
        padding: 15px;
        font-size: 24px;
    }
  
    .father{
        position: relative;
    }
    .child{
        position: absolute;
        right: 3%;
        padding:7px;
        top: 5px;
    }




</style>
    <!-- content  -->

        <!-- dashboard inner -->
        <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                        <div class="father">

                           <div class="page_title">
                              <h2 class="text text-danger" >Do You Want To Delete  <?php echo $show['name']; ?> ?</h2>
                            <div class="child" >
                                <form action="" method="post">
                              <button  type="submit" name="yes" class="btn btn-info "  >Yes</button>
                             
                              <a  href="list_student.php" class="btn btn-danger "  >Back</a>
                              </form>
                            <div>
                           </div>
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
                                    <h2>User Info</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <div class="full dis_flex center_text">
                                          <div class="profile_img">
                                            <img width="180" class="rounded-circle" src="../../Asset/img/student/<?php echo $show['img'] ?>" alt="#" />
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                          <div class="profile_contant">
                                             <div class="contact_inner">
                                                <h3> Name : <?php echo $show['name'] ?></h3>
                                                <ul class="list-unstyled">
                                                <li class="skill"> Student ID :  <?php echo $show['id'] ?></li>
                                                <!-- <li class="skill"> Courses :  <?php echo $show['sub_name'] ?></li> -->
                                                <li class="skill">Phone <i class="fa fa-phone"></i> :  <?php echo $show['phone'] ?></li>
                                                <li class="skill">City <i class="fa fa-home "></i> :  <?php echo $show['address'] ?></li>
                                                <li  class="skill">
                                                Gpa <i class="fa fa-star  "></i> :
                                                <span style="color:yellow"> 
                                                <?php $rate=$show['gba'];
                                             for($i=1; $i<=$rate;$i++){
                                                                                                    ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                               <?php }?>
                                                </span>
                                                </li>
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