<?php
require_once "Autoload.php";

class Dice6 extends Dice
{
    public function roll(): int
    {
        return rand(1, 6);
    }
}
