<?php

namespace ReenExe;

class SearcherTeam implements SearcherInterface
{
    /**
     * @var AbstractSpecialSearcher[]
     */
    private $list = [];

    public function add(AbstractSpecialSearcher $searcher)
    {
        $this->list[] = $searcher;
    }

    public function search($subject)
    {
        $map = [];
        foreach ($this->list as $searcher) {
            $map[$searcher->getType()] = $searcher->search($subject);
        }
        return $map;
    }
}
