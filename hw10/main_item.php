<?php

require_once 'Item.php';
require_once 'ItemStorage.php';

$i = new Item('1','часы');
$i->setPrice('300');
$i->setMaterial('медь');

$i2 = new Item('2','стол');
$i2->setPrice('200');
$i2->setMaterial('железо');

$i3 = new Item('3','камин');
$i3->setPrice('1000');
$i3->setMaterial('камень');


$storage = new ItemStorage();
$storage->add_item($i);
$storage->add_item($i2);
$storage->add_item($i3);

var_dump($storage->get_by_id(1));
var_dump($storage->get_by_title('стол'));
var_dump($storage->get_by_price(200,500));
var_dump($storage->get_by_material('медь','камень'));
var_dump($storage->get_by_price_and_material('300','медь'));