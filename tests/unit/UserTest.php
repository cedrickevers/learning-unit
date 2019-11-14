<?php
  
  class UserTest extends \PHPUnit\Framework\TestCase {
    public function testThatWeCanGetTheFirstName () {
        $user = new \App\Models\User;

        $user->setFirstName("Billy");

        $this->assertEquals('Billy', $user->getFirstName());
      }
      public function testThatWeCanGetTheLastName () {
        $user = new \App\Models\User;
        $user->setLastName("Carl");
        $this->assertEquals("Carl", $user->getLastName());

      }

      public function testFullNameIsReturned() {

        $user = new \App\Models\User;

        $user->setFirstName("Billy");
        $user->setLastName("Carl");

        $this->assertEquals("Billy Carl", $user->getFullName());
      }


}