<?php

class userTest extends \PHPUnit\Framework\TestCase {

    protected $user;

    public function setUp() : void{
    $this->user = new \App\Models\User;
        
    }
 
    public function testIFWeCanGetFirstName(){


        $this->user->setFirstName("Miakis");

       $this->assertEquals("Miakis", $this->user->getFirstName());   
    }
    public function testIFWeCanGetLastName(){


       $this->user->setLastName("Sora");

       $this->assertEquals("Sora", $this->user->getLastName());   
    }

    public function testThatWeCangetFullName(){

        $this->user->setFirstName("Miakis");
        $this->user->setLastName("Sora");

        $this->assertEquals("Miakis Sora", $this->user->getFullName() );
    }

    public function testIfEmailUserCanBeSet(){

        $this->user->setEmail("miakis@gmail.com");
        
        $this->assertEquals("miakis@gmail.com", $this->user->getEmail());
    }

    public function testIfVariablesContainCorrectValue(){

        $this->user->setFirstName("Miakis");
        $this->user->setLastName("Sora");
        $this->user->setEmail("miakis@gmail.com");

        $emailVariables = $this->user->getEmailvariables();
        
       $this->assertArrayHasKey("full_name", $emailVariables);
       $this->assertArrayHasKey("email", $emailVariables);


       $this->assertEquals($emailVariables["full_name"], "Miakis Sora");
       $this->assertEquals($emailVariables["email"], "miakis@gmail.com");

    }    


    }
