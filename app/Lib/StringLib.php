<?php
namespace App\Lib;

class StringLib
{
    private static $salt = 'FS0C!3TYRUL3ZD00D';

    public function clean($string)
    {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }

    public function hash($string)
    {
        return crypt($string, self::$salt);
    }
}
