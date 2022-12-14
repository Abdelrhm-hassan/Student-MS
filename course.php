<?php

// include Header
include_once('inc/header.php');
include_once('inc/database.php');
$database=new Database();
$table='subject';

$course=$database->selectall($table);   

?>

<!-- //  Coursess Section -->

<!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Our Classes</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Our Classes</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Popular Classes</span></p>
                <h1 class="mb-4">Classes for Your Kids</h1>
            </div>
            <div class="row">
            <!-- read data -->
            <?php
                foreach($course as $d){?>

                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img  width="300" height="200" class="card-img-top mb-2" src="Asset/img/course/<?php echo $d['img'];?>." alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title"><?php echo $d['sub_name']?></h4>
                            <p class="card-text"><?php echo $d['desc']?></p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                                <div class="col-6 py-1"><?php echo $d['age_of_kids'];?></div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                                <div class="col-6 py-1"><?php echo $d['total_seat'];?> Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                                <div class="col-6 py-1"><?php echo $d['class_time'];?></div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right"><strong> Price</strong></div>
                                <div class="col-6 py-1"><?php echo $d['price'];?> $ / Month</div>
                            </div>
                           
                        </div>
                        <a href="login.php" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>

               <?php }?>
            </div>
        </div>
    </div>
    <!-- Class End -->


   




<?php
// include Footer
include('inc/footer.php');
?>