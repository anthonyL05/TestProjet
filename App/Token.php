<?php
/**
 * User: antho
 * Date: 24/05/2017
 */

namespace App;

/**
 * Class Token
 * @package App
 */
class Token
{
    /**
     * @return string
     */
    public function generateToken():string {
            $strRepeat = str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVW", 8);
            return substr(str_shuffle($strRepeat), 0, random_int(6,35));
        }
}