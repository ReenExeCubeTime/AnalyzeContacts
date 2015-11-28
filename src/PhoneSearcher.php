<?php

namespace ReenExe;

class PhoneSearcher extends AbstractSpecialSearcher
{
    protected $type = 'phones';

    /**
     * @inheritdoc
     */
    public function search($subject)
    {
        return [];
    }
}
