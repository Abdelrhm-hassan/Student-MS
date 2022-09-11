
<!-- Header -->
<?php 
  include_once('../inc/header.php');
    include_once('../controller/student.php');
    $get_student=new student();
    $student=$get_student->list();

  
?>

<style>
    .father{
        position: relative;
    }
    .child{
        position: absolute;
        right: 3%;
        padding:7px;
    }
    </style>

    <!-- content section -->
         <br>
         <br>
         <br>
      <!-- table section -->
      <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                           <div class="father">
                             
                           <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                 

                                    <h2>ALL student</h2>
                                    <a  href="add_student.php" class="btn btn-info child"  >Add New student</a>
                                    </div>
                                </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-hover">
                                       <thead>
                                          <tr>

                                             <th>#</th>
                                             <th>img</th>
                                             <th>Name</th>
                                             <th>City</th>
                                             <th>Gpa</th>
                                             <th>Phone</th>
                                             <th></th>
                                             <th style="text-align:center;" >Acion</th>
                                           
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php
                                       $i=1;
                                        foreach($student as $t)

                                            {?>
                                          <tr>
                                           
                                             <td><?php echo $i++?></td>
                                             <td>
                       <img style="border-radius: 50%;" class="user_img  img-responsive"  src="../../Asset/img/student/<?php echo $t['img']?>" alt="#" />

                                             </td>
                                             <td><?php echo $t['name']?>  </td>
                                             <td><?php echo $t['address']?> </td>
                                             <td style="color:yellow;" >
                                             <?php $rate=$t['gba'];
                                             for($y=1; $y<=$rate;$y++){
                                                                         ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <?php }?>
                                                 </td>
                                             <td><?php echo $t['phone']?></td>
                                             <td>
                                           
                                             
                                               <a class="btn btn-info "  href="show_student.php?id=<?php echo $t['id'] ?> ">Show</a>
                                             </td>
                                             <td>
                                               <a class=" btn btn-info"  href="edit_student.php?id=<?php echo $t['id'] ?> ">Edit</a></td>
                                               <td>
                                               <a class="btn btn-danger"  href="delete_student.php?id=<?php echo $t['id'] ?> ">Delete</a>
                                            </td>
                                          </tr>
                                          <?php }?>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>

            
    <!--/ content section -->


<!-- Footer -->
     <?php
      include_once('../inc/footer.php');

    ?>