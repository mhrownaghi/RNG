<?php
require_once "Autoload.php";

class Dice12 extends Dice
{
    public function roll(): int
    {
        return rand(1, 12);
    }
}
