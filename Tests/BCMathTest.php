<?php
use BCMath\BCMath;
/**
 * Class BCMathTest
 * Test case for all functions in the BCMath wrapper class
 */
class BCMathTest extends PHPUnit\Framework\TestCase {

    /**
     * Should support bcadd()
     */
    public function testShouldSupportBcadd () {
        $this->assertEquals(bcadd(1, 2), BCMath::add(1,2));
    }

    /**
     * Should support bcsub()
     */
    public function testShouldSupportBcsub() {
        $this->assertEquals(bcsub(2, 1), BCMath::sub(2, 1));
    }

    /**
     * Should support bcmul()
     */
    public function testShouldSupportBcmul() {
        $this->assertEquals(bcmul(1, 2), BCMath::mul(1, 2));
    }

    /**
     * Should support bcdiv()
     */
    public function testShouldSupportBcdiv() {
        $this->assertEquals(bcdiv(2,2), BCMath::div(2,2));
    }
}