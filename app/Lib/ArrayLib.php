<?php
namespace App\Lib;

class ArrayLib
{
    /**
     * Convert Object to Array
     * Used result keyword as a function name for execution.
     * @param  object $oObject object data
     * @return array           data
     */
    public function result($oObject)
    {
        return json_decode(json_encode($oObject), true);
    }
}
