<?php

class divisionTest extends \PHPUnit\Framework\TestCase{

    public function isDivisionWorking() {
        $division = new \App\Models\User;

        $division->setDivision([100,2]);

        $this->assertEquals(50, $this->getDivision());
    }
}
