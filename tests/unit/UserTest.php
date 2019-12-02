<<?php

class userTest extends \PHPUnit\Framework\TestCase {


    public function setUp() : void {

        $this->user = new \App\Models\User;

        $this->user->setFirstName("Miakis");
    }

    public function testThatWeCanGetTheFirstNAme(){

        $this->assertEquals("Miakis", $this->user->getFirstName());

    }
    /** @test */                
    public function getThelastName(){
        $user = new \App\Models\User;

        $user->setLastName("Sora");

        $this->assertEquals("Sora", $user->getLastName());
    }
    /** @test */                
public function getTheFullName(){
    $user = new \App\Models\User;

    $user->setFirstName("Miakis");
    $user->setLastName("Sora");

    $this->assertEquals("Miakis Sora", $user->getFullName());
}
 

}

    }    


    }
