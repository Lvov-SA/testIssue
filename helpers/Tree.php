<?php
declare(strict_types=1);

abstract class Tree
{
    protected int $fruit;
    protected int $uuId;

    public function __construct(int $uuId)
    {
        $this->uuId = $uuId;
    }

    function getFruit() : int{
        return $this->fruit;
    }
}