<?php

namespace DescisionTree;

class ISerialize
{
    public static function Iserialize($data)
    {
        return json_encode($data);
    }

    public static function Iunserialize($data)
    {
        return json_decode($data, true);
    }
}
