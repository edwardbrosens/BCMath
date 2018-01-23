<?php

namespace BCMath;

/**
 * Class BCMath
 * @package BCMath
 */
class BCMath {
    /**
     * @param string $left_operand
     * @param string $right_operand
     * @param int $scale [optional]
     * @return string
     */
    public static function add($left_operand, $right_operand, $scale = null) {
        return bcadd($left_operand, $right_operand, $scale);
    }
}