<?php

namespace ReenExe;

class WordSearcher extends AbstractSpecialSearcher
{
    private $list;

    public function __construct($type, array $list)
    {
        $this->type = $type;
        $this->list = $list;
    }

    public function search($subject)
    {
        return [
            'some'
        ];
    }
}
