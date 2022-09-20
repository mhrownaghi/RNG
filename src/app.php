<?php
require_once "Classes/Autoload.php";

$num = filter_input(INPUT_POST, "num", FILTER_SANITIZE_NUMBER_INT);
$diceType = filter_input(INPUT_POST, "dice-type", FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result of rolling dices</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <h1>Result of rolling dices</h1>
    <hr>
    <div class="result-item">
        <div class="item-label">number of dices:</div>
        <div class="item-value"><?= $num ?></div>
    </div>
    <div class="result-item">
        <div class="item-label">type of dices:</div>
        <div class="item-value"><?= $diceType ?></div>
    </div>
    <?php
    for ($i = 1; $i <= $num; $i++) {
        $dice = DiceFactory::getDice($diceType);
    ?>
        <div class="result-item">
            <div class="item-label">Dice No <?= $i ?>:</div>
            <div class="item-value"><?= $dice->roll() ?></div>
        </div>
    <?php } ?>
</body>

</html>