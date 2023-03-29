<?php
declare(strict_types=1);

class PearTree extends Tree
{
    public function __construct(int $uuId)
    {
        parent::__construct($uuId);
        $this->fruit = rand(0, 20);
    }
}