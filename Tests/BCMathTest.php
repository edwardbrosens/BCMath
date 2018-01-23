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

    /**
     * Should support bcmod()
     */
    public function testShouldSupportBcmod() {
        $this->assertEquals(bcmod(2, 4), BCMath::mod(2, 4));
    }

    /**
     * Should support bcpow()
     */
    public function testShouldSupportBcpow() {
        $this->assertEquals(bcpow(4, 3), BCMath::pow(4, 3));
    }

    /**
     * Should support bcsqrt()
     */
    public function testShouldSupportBcsqrt() {
        $this->assertEquals(bcsqrt(144), BCMath::sqrt(144));
    }

    /**
     * Should support bccomp()
     */
    public function testShouldSupportBccomp() {
        $this->assertEquals(bccomp(3, 3), BCMath::comp(3, 3));
    }

    /**
     * Should support bcpowmod()
     */
    public function testShouldSupportBcpowmod() {
        $this->assertEquals(bcpowmod(5, 2, 2), BCMath::powmod(5, 2, 2));
    }

    /**
     * Should support bcscale()
     */
    public function testShouldSupportBcscale() {
        $this->assertTrue(BCMath::scale(2));
    }

}