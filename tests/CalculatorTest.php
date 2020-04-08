<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calcul = new Calculator(3,5);
        $this->assertSame(8, $calcul->addition());
    }

    public function testSubstraction()
    {
        $calcul = new Calculator(5,3);
        $this->assertSame(2, $calcul->substraction());
    }

    public function testMultiplication()
    {
        $calcul = new Calculator(5,3);
        $this->assertSame(15, $calcul->multiplication());
    }

    public function testDivision()
    {
        $calcul = new Calculator(6,3);
        $this->assertSame(2, $calcul->division());
    }
}
