<?php

namespace ReenExe;

abstract class AbstractSpecialSearcher implements SearcherInterface
{
    protected $type;

    public function getType()
    {
        return $this->type;
    }
}
