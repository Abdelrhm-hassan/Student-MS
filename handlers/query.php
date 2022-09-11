<?php

class get_Data
{

   


    // make construct 
    public function __construct($db)
    {
        $this->conn=$db;

    }
    
        
    
    // get function
    public function get_all_teatcher(){
 
        $query=
        "
        SELECT * FROM `teacher` ORDER BY `id` DESC

        ";
        $result=mysqli_query($this->conn,$query);
        return $result;


    }


}










?>