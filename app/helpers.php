<?php

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
