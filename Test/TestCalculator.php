<?php

/**
 * User: antho
 * Date: 24/05/2017
 */

namespace Test;

use App\calculator;

/**
 * Class TestCalculator
 * @covers \App\calculator
 */
class TestCalculator extends \PHPUnit\Framework\TestCase
{

    /** @var Calculator $calculator */
    private $calculator;

    /**
     * TestCalculator constructor.
     * @param null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->calculator = new Calculator();
    }

    public function testAdd(){
        $this->assertEquals(2, $this->calculator->add(1, 1));
        $this->assertNotEquals(2, $this->calculator->add(1, 2));
        $this->assertNotEquals(4, $this->calculator->add(-4, 6));
        $this->assertEquals(4, $this->calculator->add(-4, 8));
        $this->assertEquals(-6, $this->calculator->add(-4, -2));

    }

    public function testSubtraction(){
        $this->assertEquals(0, $this->calculator->substraction(1, 1));
        $this->assertNotEquals(2, $this->calculator->substraction(1, 2));
        $this->assertNotEquals(4, $this->calculator->substraction(-4, 6));
        $this->assertEquals(10, $this->calculator->substraction(4, -6));
        $this->assertEquals(0, $this->calculator->substraction(-4, -4));
    }

    public function testMultiply(){
        $this->assertEquals(14, $this->calculator->multiply(7, 2));
        $this->assertNotEquals(6, $this->calculator->multiply(2, 4));
        $this->assertNotEquals(8, $this->calculator->multiply(-4, 2));
        $this->assertEquals(-8, $this->calculator->multiply(2, -4));
        $this->assertEquals(16, $this->calculator->multiply(-4, -4));
    }

    public function testDivide()
    {
        $this->assertEquals(4, $this->calculator->divide(8, 2));
        $this->assertNotEquals(6, $this->calculator->divide(12, 3));
        $this->assertNotEquals(8, $this->calculator->divide(-4, 2));
        $this->assertEquals(-4, $this->calculator->divide(-16, 4));
        $this->assertEquals(5, $this->calculator->divide(-20, -4));
        $this->assertFalse($this->calculator->divide(10, 0));
    }
}