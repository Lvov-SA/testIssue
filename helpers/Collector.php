<?php
declare(strict_types=1);

include_once 'helpers\Tree.php';
include_once 'helpers\AppleTree.php';
include_once 'helpers\PearTree.php';

class Collector
{
    protected int $basketApples;
    protected int $basketsPears;

    /**
     * @var Tree[] $garden
     */
    protected array $garden;
    public function __construct(array $garden)
    {
        $this->garden = $garden;
        $this->basketApples = 0;
        $this->basketsPears = 0;
    }

    public function harvest(){
        foreach ($this->garden as $tree) {
            switch (get_class($tree)) {
                case "AppleTree":
                {
                    $this->basketApples += $tree->getFruit();
                    break;
                }
                case "PearTree":
                {
                    $this->basketsPears += $tree->getFruit();
                    break;
                }
                default :
                {
                    break;
                }
            }
        }
    }

    public function talkResult(){
        echo "В корзине яблок: " . $this->basketApples . PHP_EOL;
        echo "В корзине груш: " . $this->basketsPears . PHP_EOL;
    }

}