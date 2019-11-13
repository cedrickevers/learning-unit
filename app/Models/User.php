<?php 
namespace App\Models;

class User{
    
    public $first_name;

    public function setFirstname($firstname){
        $this->first_name = $firstname;
    }
    public function getFirstName(){
        return  $this->first_name;
    }
}