<?php
require_once "Autoload.php";

class DiceFactory {
    static public function getDice(String $dice_name) : Dice
    {
        return new $dice_name();
    }
}