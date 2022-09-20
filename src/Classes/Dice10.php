<?php
require_once "Autoload.php";

class Dice10 extends Dice
{
    public function roll(): int
    {
        return rand(1, 10);
    }
}
