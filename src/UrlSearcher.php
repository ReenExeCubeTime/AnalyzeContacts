<?php

namespace ReenExe;

class UrlSearcher extends AbstractSpecialSearcher
{
    protected $type = 'urls';

    public function search($subject)
    {
        return [];
    }
}
