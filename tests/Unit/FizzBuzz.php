<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function test_get_1_when_value_is_1()
    {
        $fb = new FizzBuzz();
        $list = $fb->getList();
        $this->assertEquals( 1, $list[0] );
    }

    public function test_get_fizz_when_value_is_3()
    {
        $fb = new FizzBuzz();
        $list = $fb->getList();
        $this->assertEquals( 'fizz', $list[2] );
    }

    public function test_get_buzz_when_value_5()
    {
        $fb = new FizzBuzz();
        $list = $fb->getList();
        $this->assertEquals( 'buzz', $list[4] );
    }

    public function test_get_fizzbuzz_when_value_are_3_and_5()
    {
        $fb = new FizzBuzz();
        $list = $fb->getList();
        $this->assertEquals( 'fizzbuzz', $list[14] );
    }

    /**
     * @param $number
     * @param $expectedValue
     * @dataProvider numbers
     */
    public function test_correct_values_for_20_numbers($number, $expectedValue)
    {
        $fb = new FizzBuzz();
        $list = $fb->getList();
        $this->assertEquals( $expectedValue, $list[$number -1] );
    }


    public function numbers()
    {
        return [
            [1,1],
            [2,2],
            [3,'fizz'],
            [4,4,],
            [5,'buzz'],
            [6,'fizz'],
            [7,7],
            [8,8],
            [9,'fizz'],
            [10,'buzz'],
            [11,11],
            [12,'fizz'],
            [13,13],
            [14,14],
            [15,'fizzbuzz'],
            [16,16],
            [17,17],
            [18,'fizz'],
            [19,19],
            [20,'buzz'],
        ];
    }
}
