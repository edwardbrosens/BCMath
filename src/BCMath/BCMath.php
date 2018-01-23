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
}