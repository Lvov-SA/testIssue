<?php
declare(strict_types=1);

class AppleTree extends Tree
{
    public function __construct(int $uuId)
    {
        parent::__construct($uuId);
        $this->fruit = rand(40, 50);
    }
}