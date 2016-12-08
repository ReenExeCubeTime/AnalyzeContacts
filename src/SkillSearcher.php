<?php

namespace ReenExe;

class SkillSearcher extends AbstractSpecialSearcher
{
    private $map;
    private $regex;

    public function __construct($type, array $skills)
    {
        $this->type = $type;

        $this->map = $this->prepare($skills);

        $this->regex = implode('|', array_keys($this->map));
    }

    public function search($subject)
    {
        if (preg_match_all("/\b{$this->regex}\b/i", $subject, $matches)) {
            return $this->convert($matches[0]);
        }

        return [];
    }

    private function prepare(array $skills)
    {
        $map = [];
        foreach ($skills as $skill) {
            $map[strtolower($skill)] = $skill;
        }
        return $map;
    }

    private function convert(array $finds)
    {
        $map = array_fill_keys(array_map('strtolower', $finds), true);

        return array_values(array_intersect_key($this->map, $map));
    }
}
