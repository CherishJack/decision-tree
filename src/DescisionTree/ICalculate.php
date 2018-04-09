<?php

namespace DescisionTree;

class ICalculate
{
    public static function gt(float $lval, float $rval)
    {
        return floatval($lval) > floatval($rval) ? true : false;
    }

    public static function gte(float $lval, float $rval)
    {
        return floatval($lval) >= floatval($rval) ? true : false;
    }

    public static function lt(float $lval, float $rval)
    {
        return floatval($lval) < floatval($rval) ? true : false;
    }

    public static function lte(float $lval, float $rval)
    {
        return floatval($lval) <= floatval($rval) ? true : false;
    }

    public static function eq(float $lval, float $rval)
    {
        return floatval($lval) == floatval($rval) ? true : false;
    }
}

