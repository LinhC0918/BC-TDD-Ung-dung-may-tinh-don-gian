<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\CalculatorController;

class SimpleCalculatorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCalculator()
    {
        $result = new CalculatorController();
        $this->assertEquals(8, $result->addition(2,6));
        $this->assertEquals(1, $result->addition(1,0));
        $this->assertEquals(1, $result->addition(0,1));
        $this->assertEquals(0, $result->subtraction(0,0));
        $this->assertEquals(1, $result->subtraction(1,0));
        $this->assertEquals(-1, $result->subtraction(0,1));
    }
}
