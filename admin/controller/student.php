<?php 
  class student
   {
    // DB Params
    private $host = 'localhost';
    private $db_name = 'student_ms';
    private $username = 'root';
    private $password = '';
    public $conn;
    public $table= 'student';

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
      // subject 

      public function subject()
      {
        $query=
        "
        SELECT * FROM `subject` ";
        
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


    //   list student 
      public function list()
      {
        $query=
        "SELECT * FROM `student` 
         ";
        
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
        " SELECT * FROM `student` 
        WHERE `id`=".$id;

        
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
        $name,$phone,$email,$addres,$img,$sub_id,$password,$gpa
      )
      {
    


        $query=
        "
        INSERT INTO `student` (`id`, `sub_id`, `name`, `address`, `gba`, `phone`, `img`,  `password`, `email`) 
        VALUES (NULL, '$sub_id', '$name', '$addres', '$gpa', '$phone', '$img','$password',  '$email')
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
      public function Edit(
        $id,$name,$phone,$email,$addres,$img,$sub_id,$password,$gpa
        )
      {

        $edit="UPDATE `student` SET `name` = '$name ', `img` = '$img', `address` = '$addres', `gba` = '$gpa', `phone` = '$phone', `email` = '$email', `password` = '$password', `sub_id` = '$sub_id' WHERE `student`.`id` =$id";
       
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
              DELETE FROM `student` WHERE `student`.`id` = $id";
              
              if(mysqli_query($this->conn,$query))
              {
                echo'
                <script type="text/javascript">
                window.location.assign("list_student.php");
              </script>
              ';

              }
              
            
              
          
      }





     }


      ?>