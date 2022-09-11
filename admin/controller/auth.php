<?php 
  class admin {
    // DB Params
    private $host = 'localhost';
    private $db_name = 'student_ms';
    private $username = 'root';
    private $password = '';
    public $conn;

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
      // rediract function

      public function redirect($name)
      {
        if(empty($this->name))
        {
          header('location:login.php');

        }
      }
      // login fun
      public function login($email,$pass)
      {

            $sql="SELECT * FROM `admin`";

            $result=mysqli_query($this->conn,$sql);
            $row =mysqli_fetch_assoc($result);
            // checking login 
            if($email==$row['email']&&$pass==$row['password'])
            {
              session_start();
            $_SESSION['id']= true;  
            $_SESSION['user_name']=$row['name'];
            header('location:index.php');

            }elseif($email==$row['email']&&$pass!=$row['password'])
            // password wrong 
            { 
                echo '<div class="alert container alert-danger alert-dismissible" role="alert">
                <span style="text-align:center" >Your password is Wrong — check it out!</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            
            }elseif($email!=$row['email']&&$pass==$row['password'])
            {
                // email wrong
                  echo '<div class="alert container alert-danger alert-dismissible" role="alert">
                    <span style="text-align:center" >The mail not Exist — check it out!</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            }elseif($email!==$row['email']&&$pass!==$row['password'])
            {
                // Wrong email and Password
                echo '<div class="alert container alert-danger alert-dismissible" role="alert">
                <span style="text-align:center" > Wrong email and Password — check it out!</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

            }
         
    
        }
        public function logout()

        {
          session_destroy();
          header('Location:login.php');
        }

      // select all data from db
      public function selectall($table)
    
      {
     
        $query=
        "
        SELECT * FROM `$table` ORDER BY `id` DESC

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
      // show admin 
      public function getadmin()
      {
        $sql="SELECT * FROM `admin`";

        $result=mysqli_query($this->conn,$sql);
        
        if($row =mysqli_fetch_assoc($result))
        {

        
       
          return $row;
        
        }else{
          echo "faild". mysqli_connect_error();
        }
      }
     
      // Edit Function
      public function edit_admin(
        $id,$name,$phone,$email,$addres,$img,$password
        )
      {

        $edit="UPDATE `admin` SET `name` = '$name ', `img` = '$img', `address` = '$addres', `phone` = '$phone', `email` = '$email', `password` = '$password'  WHERE `admin`.`id` =$id";
       
        // run query
       if(mysqli_query($this->conn,$edit))
       
       {

       
       }else{
         echo "echo" . mysqli_connect_error();
       }
       
    
      }
      


    }
   

  
   
  ?>
 