<?php

class AdditionTest extends \PHPUnit\Framework\TestCase {

    /** @test */

    public function isAdditionWorking () {

        $addition = new \App\Models\User;

        $addition->setAddition([15,20]) ;

        $this->assertEquals(35, $addition->getAddition());

    }


}
