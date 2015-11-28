<?php

namespace ReenExe;

class SearcherTeam implements SearcherInterface
{
    /**
     * @var AbstractSpecialSearcher[]
     */
    private $map = [];

    /**
     * @param AbstractSpecialSearcher $searcher
     * @return $this
     */
    public function add(AbstractSpecialSearcher $searcher)
    {
        $this->map[$searcher->getType()] = $searcher;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function search($subject)
    {
        $result = [];
        foreach ($this->map as $type => $searcher) {
            $result[$type] = $searcher->search($subject);
        }
        return $result;
    }
}
