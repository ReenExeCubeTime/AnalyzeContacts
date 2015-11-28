<?php

namespace ReenExe;

class EmailSearcher extends AbstractSpecialSearcher
{
    protected $type = 'emails';

    /**
     * @inheritdoc
     */
    public function search($subject)
    {
        if (preg_match_all('/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})/i', $subject, $matches)) {
            return $matches[0];
        }

        return [];
    }
}
