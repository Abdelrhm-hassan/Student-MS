<?php 
  class Database {
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

   

    }
   
  ?>
 