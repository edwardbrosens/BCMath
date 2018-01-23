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
    public function testShouldSupportBcsub() {}

    /**
     * Should support bcmul()
     */
    public function testShouldSupportBcmul() {}

    /**
     * Should support bcdiv()
     */
    public function testShouldSupportBcdiv() {}
}