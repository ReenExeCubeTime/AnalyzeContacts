<?php

namespace ReenExe;

class UrlSearcher extends AbstractSpecialSearcher
{
    protected $type = 'urls';

    public function search($subject)
    {
        if (preg_match_all('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#', $subject, $matches)) {
            return $matches[0];
        }

        return [];
    }
}
