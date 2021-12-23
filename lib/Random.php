<?php

class Random
{
    public static function getRandomBoolean()
    {
        return mt_rand(0, 1) === 1;
    }

    public static function getRandomIntInRange($min, $max)
    {
        return mt_rand($min, $max);
    }

    public static function getRandomInt()
    {
        return mt_rand();
    }

    public static function getRandomDoubleInRange($min, $max)
    {
        return mt_rand($min, $max) / mt_getrandmax();
    }

    public static function getRandomDouble()
    {
        return mt_rand() / mt_getrandmax();
    }

    public static function getRandomFloatInRange($min, $max)
    {
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }

    public static function getRandomFloat()
    {
        return mt_rand() / mt_getrandmax();
    }

    public static function getRandomChar()
    {
        return chr(mt_rand(0, 255));
    }

    public static function getRandomStringOfLength($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function getRandomString()
    {
        return self::getRandomStringOfLength(self::getRandomIntInRange(3, 10));
    }

    public static function getRandomItemsFromList($list, $amount, $allowDuplicates)
    {
        if ($allowDuplicates === true && $amount > count($list)) {
            throw new Exception("Amount must be less than or equal to list size when unique is true");
        }

        $items = [];
        for ($i = 0; $i < $amount; $i++) {
            $item = $list[self::getRandomIntInRange(0, count($list) - 1)];
            $items[] = $item;
            if ($allowDuplicates === false) {
                $list = array_diff($list, [$item]);
            }
        }
        return $items;
    }

    public static function getRandomItemFromList($list)
    {
        return self::getRandomItemsFromList($list, 1, false)[0];
    }
}