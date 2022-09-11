<?php 
// <!-- Header -->
  include_once('../inc/header.php');

  include_once('../controller/auth.php');
  include_once('../controller/student.php');
    $get_student=new student();
   $show=$get_student->show($_GET['id']);
   $sub=$get_student->subject();

    // create New object  Teatcher
    if(isset($_POST['edit']))
    {
        // resive Data from  Input Form
        $id=$_POST['id'];
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $addres=$_POST['city'];
      $img=$_FILES['img']['name'];
      $password=$_POST['password'];
      $sub_id=$_POST['sub_id'];
      
      $gpa=$_POST['gpa'];
    

          // save data in DB
        $show=$get_student->Edit(
          $id, 
        $name,
        $phone,
        $email,
        $addres,
        $img,
        $sub_id,
        $password,
        $gpa
        );
        
           // save img
              $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/php_native/sudent-ms/Asset/img/student/';
              $uploadfile = $uploaddir .'/'.basename($_FILES['img']['name']);

              if(move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile))
              {
                  // redirect url
                  echo'
                  <script type="text/javascript">
                  window.location.assign("list_student.php");
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
    // echo $sub['name']; die;
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
                              <h2>ِAdd student</h2>
                           </div>
                        </div>
                     </div>
                     <br>
                    

<!-- content -->
<form class="father" method="POST" enctype="multipart/form-data">
    
  
  <div class="form-row">
   
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Name</label>
      <input type="text" name="name" class="form-control" id="validationDefault01" value="<?=$show['name']?>" placeholder="Name" required>
      <input type="text" hidden name="id" value="<?=$show['id']?>">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault02"> Phone</label>
      <input type="text" name="phone" class="form-control" value="<?=$show['phone']?>"   placeholder="01XXXXXX"  required>
    </div>
  </div>
  
  <div class="form-row">
    
    <div class="col-md-4 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" class="form-control" value="<?=$show['address']?>" name="city" placeholder="City" required>
    </div>
  </div>
 
  <div class="p-2 bg-primary text-white  col-md-4 mb-3 ">Login Form</div>

  
  <div class="form-row">
      <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input  type="email" class="form-control" value="<?=$show['email']?>" name="email" placeholder="XX@emai.com"  required>
      </div>
    </div>
  </div>

  <div class="form-row">
      <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input  type="password" class="form-control"  name="password" placeholder="******"  required>
      </div>
    </div>
  </div>
  

  <!-- sudent class -->
  
    

  <div class="input-group col-md-4 mb-3">
  <label class="input-group-text" for="inputGroupSelect01"> Student Class</label>
  <select name="sub_id" class="form-select  " id="inputGroupSelect01">

    <?php
    foreach ($sub as $s){?>
    <option value="<?= $s['id']?>"><?= $s['sub_name']?></option>
    <?php }?>

    
  </select>
</div>
<!-- Gpa -->
  
<div class="input-group col-md-4 mb-3">
  <label class="input-group-text" for="inputGroupSelect01"> Student Gpa</label>
  <input type="number" value="<?=$show['gba']?>" name="gpa" id="">
</div>




      <!-- img 1 -->
    <div class="form-row">

        <div class=" child   col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">

            <p>
            <input  class="btn btn-primary btn-block mx-auto" type="file"  accept="image/*" name="img" id="file"  onchange="loadFile(event)" style="display: none;">
            </p>

            <img src="../../Asset/img/student/<?=$show['img']?>" id="output" width="400" height="300" class="tm-product-img-dummy mx-auto"  />


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
  <button class="btn btn-primary" name="edit" type="submit"> edit</button>
  <a href="list_student.php" class="btn btn-danger" >Back</a>
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