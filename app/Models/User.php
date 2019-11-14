<?php 
namespace App\Models;

class User{
    
    public $first_name;
    public $last_name;

    public function setFirstname($firstname){
        $this->first_name = $firstname;
    }
    public function getFirstName(){
        return  $this->first_name;
    }
    public function setLastName($lastName) {

        $this->last_name = $lastName;
    }
    public function getLastName() {
        return $this->last_name;
    } 
    
    public function getFullName() {
        return "$this->first_name $this->last_name";
      }
}