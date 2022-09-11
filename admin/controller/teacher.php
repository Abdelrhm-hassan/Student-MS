<?php 
  class teacher
   {
    // DB Params
    private $host = 'localhost';
    private $db_name = 'student_ms';
    private $username = 'root';
    private $password = '';
    public $conn;
    public $table= 'teacher';

    // DB Connect

    // connection Function
      public function __construct()
      {

            $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
            if(mysqli_connect_error())
            {
              die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
            }


      }
    //   list teatcher 
      public function list()
      {
        $query=
        "
        SELECT * FROM `$this->table` ORDER BY `id` ";
        
        $runQuery=mysqli_query($this->conn,$query);
        $data=array();
       if($runQuery)
        {
        while( $d=mysqli_fetch_array($runQuery))
        {
         $data[]=$d;
        }
          return $data;
        }else{
          echo "faild". mysqli_connect_error();
        }
      }
      // Show Function
      public function show($id)
      {
        $query=
        "
        SELECT * FROM `$this->table` WHERE `id`=".$id;
        
        $runQuery=mysqli_query($this->conn,$query);
        $data=array();
       if($runQuery)
        {
            // push data
        $data=mysqli_fetch_assoc($runQuery);
        
          return $data;
        }else{
          echo "faild". mysqli_connect_error();
        }
        
    
      }

      // Create Function
      public function create(
        $name,$phone,$email,$addres,$img,$spec,$face,$twitter,$linked,$rate
      )
      {
    


        $query=
        "
        INSERT INTO `teacher` (`id`, `sub_id`, `name`, `address`, `rate`, `phone`, `img`, `spec`, `face`, `twiter`, `linked`, `email`) 
        VALUES (NULL, '', '$name', '$addres', '$rate', '$phone', '$img', '$spec', '$face', '$twitter', '$linked', '$email')
        ";
        
        // $data=array();
       if(mysqli_query($this->conn,$query))
       
        {

        
        }else{
          echo "faild". mysqli_connect_error();
        }
        
    
      } 

      // end of create function

      // Edit Function
      public function Edit($id,$name,$phone,$email,$addres,$img,$spec,$face,$twitter,$linked,$rate)
      {

       $edit=
       "
       UPDATE `teacher` SET `name`='$name',`address`='$addres',`rate`='$rate',`img`='$img',`spec`='$spec',`face`='$face',`twiter`='$twitter', `phone`='$phone', `linked` ='$linked',`email`='$email' WHERE `teacher`.`id`='$id'";
        // run query
       if(mysqli_query($this->conn,$edit))
       
       {

       
       }else{
         echo "echo" . mysqli_connect_error();
       }
       
    
      }

      // Delete Function
      public function delete($id)
      {
              $query=
              "
              DELETE FROM `teacher` WHERE `teacher`.`id` = $id";
              
              if(mysqli_query($this->conn,$query))
              {
                echo'
                <script type="text/javascript">
                window.location.assign("list_teacher.php");
              </script>
              ';

              }
              
            
              
          
      }





     }


      ?>