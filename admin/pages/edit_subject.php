<?php 
// <!-- Header -->
  include_once('../inc/header.php');

  include_once('../controller/auth.php');
  include_once('../controller/course.php');

    $get_subject=new subject();
   $sub=$get_subject->teacher();
   $show=$get_subject->show($_GET['id']);
    print_r($show);
    
    // create New object  Teatcher
    if(isset($_POST['edit']))
    {
        // resive Data from  Input Form
      $name=$_POST['name'];
      $ctime=$_POST['ctime'];
      $age_of_kis=$_POST['age'];
      $avialable_seat=$_POST['seat'];
      $img=$_FILES['img']['name'];
      $spec=$_POST['spec'];
      $desc=$_POST['desc'];
      $teacher=$_POST['teacher_id'];
      $price=$_POST['price'];
      $rate=$_POST['rate'];
    

          // save data in DB
        $save=$get_subject->Edit( 
        $name,
        $ctime,
        $age_of_kis,
        $avialable_seat,
        $img,
        $spec,
        $desc,
        $price,
        $teacher,
        $rate
        
        );
        
           // save img
              $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/php_native/sudent-ms/Asset/img/course/';
              $uploadfile = $uploaddir .'/'.basename($_FILES['img']['name']);

              if(move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile))
              {
                  // redirect url
                

                  
                  echo'
                  <script type="text/javascript">
                  window.location.assign("list_subject.php");
                </script>
                ';
                  
              }else
              {
                  
                echo '<div class="alert container alert-danger alert-dismissible" role="alert">
                <span style="text-align:center" >Faild Please Try Again!</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
              }
    }

?>



            <!-- custom css  -->
            <style>
                .father{
                    position: relative;
                }
                .child{
                    position: absolute;
                    right: 0px;
                    top: 0px;
                    width: 30%;
                }
                </style>


<br>
<br>
<br>

<div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>ِAdd Course</h2>
                           </div>
                        </div>
                     </div>
                     <br>
                    

<!-- content -->
<form class="father" method="POST" enctype="multipart/form-data">
    
  
  <div class="form-row">
   
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Name</label>
      <input type="text" name="name" value="<?=$show['sub_name']?>" class="form-control" id="validationDefault01" placeholder="Course Name" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02"> Catagory</label>
      <input type="text" name="spec" value="<?=$show['spec']?>" class="form-control"  placeholder="Course Catagory"  required>
    </div>
  </div>
  <div class="form-row">
      <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Class Time</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Time</span>
        </div>
        <input type="text" value="<?=$show['class_time']?>" class="form-control"  name="ctime" placeholder="ex..3pm-5pm"  required>
      </div>
    </div>

    
    <div class="col-md-4 mb-3">
      <label for="validationDefault03">Age Of Kids</label>
      <input type="text" value="<?=$show['age_of_kids']?>" class="form-control" name="age" placeholder="ex..2-4 years " required>
    </div>
  </div>
  
    <div class="form-row">

    <div class="col-md-4 mb-3">
      <label for="validationDefault04">Available of Seat</label>
      <input type="number" name="seat" value="<?=$show['total_seat']?>" class="form-control" id="validationDefault04" placeholder="number only" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault05">Price</label>
      <input type="number" value="<?=$show['price']?>" name="price" class="form-control" id="validationDefault05" placeholder="Number only" required>
    </div>

    
  </div>

  <div class="form-row">

  <div class="col-md-4 mb-3">
      <label for="validationDefault05"> Course Rate </label>
      <input type="number" value="<?=$show['rate']?>" name="rate" class="form-control" id="validationDefault05" placeholder="Number only" required>
    </div>



    
    <!-- Teatcher class -->
    <div class="input-group col-md-4 mb-3">
    <label class="input-group-text" for="inputGroupSelect01"> Course Instructor</label>
    <select name="teacher_id" class="form-select  " id="inputGroupSelect01">
       <?php
        foreach ($sub as $s){?>
        <option value="<?= $s['id']?>"><?= $s['name']?></option>
        <?php }?>
    </select>
    </div>
    
    </div>

    <div class="col-6">
      <label for="validationDefault05">Course Desicription</label>
      <textarea  name="desc" class="form-control" id="validationDefault05"  placeholder="" required> <?=$show['desc']?>
      </textarea>
    </div>

      <!-- img 1 -->
      <div class="form-row">

      <div class=" child   col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">

        <p>
        <input  class="btn btn-primary btn-block mx-auto" type="file"  accept="image/*" name="img" id="file"  onchange="loadFile(event)" style="display: none;">
        </p>

      <img src="../../Asset/img/course/<?=$show['img']?>" id="output" width="400" height="300" class="tm-product-img-dummy mx-auto"  />


        <p>
        <label class="btn btn-primary my-5  btn-block mx-auto" for="file" style="cursor: pointer;">Upload Image</label>
        </p>

    </div>
 </div>
  
    

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" name="create" type="submit"> Create</button>
  <a href="list_subject.php" class="btn btn-danger" >Back</a>
</form>
<!-- / content  -->
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};

</script>

<!-- Footer -->
<?php
      include_once('../inc/footer.php');

    ?>