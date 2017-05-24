<?php

/**
 * User: antho
 * Date: 24/05/2017
 */

namespace App;

/**
 * Class Calculator
 * @package App
 */
class Calculator
{
    /**
     * @param int $nomber1
     * @param int $nomber2
     * @return int
     */
    public function add(int $nomber1, int $nomber2 ):int{
        return $nomber1 + $nomber2;
    }

    /**
     * @param int $nomber1
     * @param int $nomber2
     * @return int
     */
    public function substraction(int $nomber1, int $nomber2):int{
        return  $nomber1 - $nomber2;
    }

    /**
     * @param int $nombre1
     * @param int $nombre2
     * @return int
     */
    public function multiply(int $nombre1, int $nombre2):int{
        return $nombre1 * $nombre2;
    }

    /**
     * @param int $nombre1
     * @param int $nombre2
     * @return float
     */
    public function divide(int $nombre1, int $nombre2):float {
        if($nombre2 == 0) return false;
        return $nombre1 / $nombre2;
    }
}