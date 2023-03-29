<?php
declare(strict_types=1);


include_once 'helpers\Tree.php';
include_once 'helpers\AppleTree.php';
include_once 'helpers\PearTree.php';

$uuIdsOfTree = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
$garden = [];
$basketApples = 0;
$basketsPears = 0;


for ($i = 0; $i < count($uuIdsOfTree); $i++) {

    if ($i < 10) {
        $garden[] = new AppleTree($uuIdsOfTree[$i]);
    } else {
        $garden[] = new PearTree($uuIdsOfTree[$i]);
    }
}

foreach ($garden as $tree) {
    switch (get_class($tree)) {
        case "AppleTree":
        {
            $basketApples += $tree->getFruit();
            break;
        }
        case "PearTree":
        {
            $basketsPears += $tree->getFruit();
            break;
        }
        default :
        {
            break;
        }
    }
}

echo "В корзине яблок: " . $basketApples . PHP_EOL;
echo "В корзине груш: " . $basketsPears . PHP_EOL;