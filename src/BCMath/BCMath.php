<?php

namespace BCMath;

/**
 * Class BCMath
 * @package BCMath
 */
class BCMath {

    /**
     * Add two arbitrary precision numbers
     * @param string $left_operand
     * @param string $right_operand
     * @param int $scale [optional]
     * @return string
     */
    public static function add($left_operand, $right_operand, $scale = null) {
        return bcadd($left_operand, $right_operand, $scale);
    }

    /**
     * Subtract two arbitrary precision numbers
     * @param string $left_operand
     * @param string $right_operand
     * @param int $scale [optional]
     * @return string
     */
    public static function sub($left_operand, $right_operand, $scale = null) {
        return bcsub($left_operand, $right_operand, $scale);
    }

    /**
     * Multiply two arbitrary precision numbers
     * @param string $left_operand
     * @param string $right_operand
     * @param int $scale [optional]
     * @return string
     */
    public static function mul($left_operand, $right_operand, $scale = null) {
        return bcmul($left_operand, $right_operand, $scale);
    }

    /**
     * Divide two arbitrary precision numbers
     * @param string $left_operand
     * @param string $right_operand
     * @param int $scale [optional]
     * @return string
     */
    public static function div($left_operand, $right_operand, $scale = null) {
        return bcdiv($left_operand, $right_operand, $scale);
    }

    /**
     * Get modulus of an arbitrary precision number
     * @param string $left_operand
     * @param string $modulus
     * @return string the modulus as a string, or NULL if
     * modulus is 0.
     */
    public static function mod($left_operand, $modulus) {
       return bcmod($left_operand, $modulus);
    }

    /**
     * Raise an arbitrary precision number to another
     * @param string $left_operand
     * @param string $right_operand
     * @param int $scale [optional]
     * @return string the result.
     */
    public static function pow($left_operand, $right_operand, $scale = null) {
        return bcpow($left_operand, $right_operand, $scale);
    }

    /**
     * Get the square root of an arbitrary precision number
     * @param string $operand
     * @param int $scale [optional]
     * @return string the square root as a string, or NULL if
     * operand is negative.
     */
    public static function sqrt($operand, $scale = null) {
        return bcsqrt($operand, $scale);
    }

    /**
     * Set default scale parameter for all BCMath and bcmath functions
     * @param int $scale the scale factor
     * @return bool TRUE on success or FALSE on failure.
     */
    public static function scale ($scale) {
        return bcscale($scale);
    }

    /**
     * Compare two arbitrary precision numbers
     * @param string $left_operand
     * @param string $right_operand
     * @param int $scale [optional]
     * @return int 0 if the two operands are equal, 1 if the
     * left_operand is larger than the right_operand, -1 otherwise.
     */
    public static function comp($left_operand, $right_operand, $scale = null) {
        return bccomp($left_operand, $right_operand, $scale);
    }

    /**
     * Raise an arbitrary precision number to another, reduced by a specified modulus
     * @param string $left_operand
     * @param string $right_operand
     * @param string $modulus
     * @param int $scale [optional]
     * @return string the result as a string, or NULL if modulus is 0.
     */
    public static function powmod($left_operand, $right_operand, $modulus, $scale = null) {
        return bcpowmod($left_operand, $right_operand, $modulus, $scale);
    }

}