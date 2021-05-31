<?php

if (!function_exists('arr_repeat')) {
    /**
     * Repeats 3 times the content of input array
     *
     * @param array $array
     * @return mixed
     */
    function arr_repeat(array $array): mixed
    {
        return call_user_func_array('array_merge', array_fill(0, 3, $array));
    }
}

if (!function_exists('str_reformat')) {
    /**
     * Returns the reformatted version of a given string.
     *
     * @param string $string
     * @return string
     */
    function str_reformat(string $string): string
    {
        $vowels = array("a", "e", "i", "o", "u");

        return ucfirst(str_replace($vowels, "", strtolower($string)));
    }
}

if (!function_exists('arr_next_binary_number')) {
    /**
     * Return next binary number as array from array of 0 and 1
     *
     * @param array $array
     * @return array|false
     */
    function arr_next_binary_number(array $array): bool|array
    {
        $binary = "";
        for($i = 0; $i < count($array); $i++) {
            $binary .= $array[$i];
        }

        // Failsafe to check if the input array can be represented as binary number
        if(!preg_match("/^[0-1]+$/", $binary)) {
            return false;
        }

        // Convert binary to decimal number
        $decimal = bindec($binary);

        // Set the next decimal number
        $next_decimal = $decimal + 1;

        // Convert decimal to binary number
        $next_binary = decbin($next_decimal);

        // Split the binary number digits into an array
        $new_array = [];
        // The str_split() function is not used because it will return digits as strings, and in the following way they are returned as integers
        for ($i = 0; $i < strlen($next_binary); $i++) {
            $new_array[] = (int)substr($next_binary, $i, 1);
        }

        return $new_array;
    }
}

/**
 * SWAPI Client functions
 */
if (!function_exists('deromanize')) {
    /**
     * @param string $number
     * @return int
     */
    function deromanize(string $number): int
    {
        $number = str_replace(" ", "", strtoupper($number));
        $numerals = array("M" => 1000, "CM" => 900, "D" => 500, "CD" => 400, "C" => 100, "XC" => 90, "L" => 50, "XL" => 40, "X" => 10, "IX" => 9, "V" => 5, "IV" => 4, "I" => 1);
        $result = 0;
        foreach ($numerals as $key => $value) {
            while (str_starts_with($number, $key)) {
                $result += $value;
                $number = substr($number, strlen($key));
            }
        }
        return $result;
    }
}

if (!function_exists('romanize')) {
    /**
     * @param int $number
     * @return string
     */
    function romanize(int $number): string
    {
        $numerals = array("M" => 1000, "CM" => 900, "D" => 500, "CD" => 400, "C" => 100, "XC" => 90, "L" => 50, "XL" => 40, "X" => 10, "IX" => 9, "V" => 5, "IV" => 4, "I" => 1);
        $result = "";
        foreach ($numerals as $key => $value) {
            $result .= str_repeat($key, $number / $value);
            $number %= $value;
        }
        return $result;
    }
}
