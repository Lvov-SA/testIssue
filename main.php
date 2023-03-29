<?php
declare(strict_types=1);


include_once 'helpers\Tree.php';
include_once 'helpers\AppleTree.php';
include_once 'helpers\PearTree.php';
include_once 'helpers\Collector.php';



$uuIdsOfTree = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
$garden = [];

for ($i = 0; $i < count($uuIdsOfTree); $i++) {

    if ($i < 10) {
        $garden[] = new AppleTree($uuIdsOfTree[$i]);
    } else {
        $garden[] = new PearTree($uuIdsOfTree[$i]);
    }
}

$collector = new Collector($garden);
$collector->harvest();
$collector->talkResult();

