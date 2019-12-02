<?php
<?php

namespace App\Models;


class User {

    public $first_name;
    public $last_name;
    public $numbers;



    public function setFirstName($firstName) {

        $this->first_name = $firstName;
    }

    public function getFirstName(){
        return $this->first_name;
    }

    public function setLastName($lastName){
        $this->last_name = $lastName;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function getFullName(){
        return "$this->first_name $this->last_name";
    }


    //**************************** */

    public function setAddition( Array $numbers ) {

        $this->numbers = $numbers;

    }
    
    public function getAddition(){
        return array_sum($this->numbers);
    }

    
    public function setDivision( $a, $b) {

        if( $a && $b !==0){
            return $a / $b;
        }else{
            print_r("can't divide by 0");
        }

    }
    
    public function getDivision(){
        return array_sum($this->numbers);
    }
}
