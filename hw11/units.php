<?php

namespace Autoload\Lesson;
require_once __DIR__ . '/vendor/autoload.php';

//error_reporting(0);

// require_once 'Unit.php';
// require_once 'BattleUnit.php';
// require_once 'King.php';
// require_once 'Infantry.php';
// require_once 'Knight.php';

$king_white = new King(100, 2);
$king_black = new King(100, 2);

$king_white->recruting('infantry');
$king_white->recruting('knight');
var_dump($king_white->army);

$king_black = new King(100, 2);
$king_black->recruting('knight');
$king_black->recruting('knight');
var_dump($king_black->army);
 
$king_black->attack($king_white);
echo "Черный король напал на белого короля\n";
var_dump($king_black->army);
var_dump($king_white->army);

echo "Белый король отдыхает\n";
foreach($king_white->army as $unit) {
    $unit->rest();
}
var_dump($king_white->army);

