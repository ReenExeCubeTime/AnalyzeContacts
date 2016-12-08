<?php

namespace ReenExe;

class SkillSearcher extends AbstractSpecialSearcher
{
    private $list;
    private $regex;

    public function __construct($type, array $list)
    {
        $this->type = $type;
        $this->list = $list;
        $this->regex = implode('|', $list);
    }

    public function search($subject)
    {
        if (preg_match_all("/\b{$this->regex}\b/i", $subject, $matches)) {
            return $matches[0];
        }

        return [];
    }
}
