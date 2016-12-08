<?php

namespace Tests;

use ReenExe\WordSearcher;

class WordSearcherTest extends AbstractSearcherTest
{
    private $words = [
        'some'
    ];

    public function dataProvider()
    {
        yield [
            'some',
            ['some']
        ];
    }

    protected function getSearcher()
    {
        return new WordSearcher('words', $this->words);
    }
}
