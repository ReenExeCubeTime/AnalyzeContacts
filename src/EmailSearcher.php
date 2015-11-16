<?php

namespace ReenExe;

class EmailSearcher extends AbstractSpecialSearcher
{
    protected $type = 'emails';

    public function search($subject)
    {
        return [];
    }
}
