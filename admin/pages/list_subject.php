
<!-- Header -->
<?php 
  include_once('../inc/header.php');
    include_once('../controller/course.php');
    $get_subject=new subject();
    $subject=$get_subject->list();

  
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
                                 

                                    <h2>ALL subject</h2>
                                    <a  href="add_subject.php" class="btn btn-info child"  >Add New subject</a>
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
                                             <th>Price</th>
                                             <th>Age of Kids</th>
                                             <th>Time</th>
                                             <th></th>
                                             <th style="text-align:center;" >Acion</th>
                                           
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php
                                       $i=1;
                                        foreach($subject as $t)

                                            {?>
                                          <tr>
                                           
                                             <td><?php echo $i++?></td>
                                             <td>
                       <img style="border-radius: 50%;" class="user_img  img-responsive"  src="../../Asset/img/course/<?php echo $t['img']?>" alt="#" />

                                             </td>
                                             <td><?php echo $t['sub_name']?>  </td>
                                             <td><?php echo $t['price']?> $ </td>
                                             <td><?php echo $t['age_of_kids']?> </td>
                                            
                                             <td><?php echo $t['class_time']?></td>
                                             <td>
                                           
                                             
                                               <a class="btn btn-info "  href="show_subject.php?id=<?php echo $t['id'] ?> ">Show</a>
                                             </td>
                                             <td>
                                               <a class=" btn btn-info"  href="edit_subject.php?id=<?php echo $t['id'] ?> ">Edit</a></td>
                                               <td>
                                               <a class="btn btn-danger"  href="delete_subject.php?id=<?php echo $t['id'] ?> ">Delete</a>
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