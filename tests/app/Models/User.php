<?php 

namespace App\Models;

class User{
    public $first_name;

   
    public function setFirstName($firstname){
        
     $this->first_Name = $firstname;
    }
 
    public function getFirstName(){
        return $this->first_name;
    }

}