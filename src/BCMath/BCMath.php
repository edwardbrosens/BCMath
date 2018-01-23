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
}