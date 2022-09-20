<?php
require_once "Autoload.php";

class Dice8 extends Dice
{
    public function roll(): int
    {
        return rand(1, 8);
    }
}
