<?php

namespace Tests;

use ReenExe\SkillSearcher;

class SkillSearcherTest extends AbstractSearcherTest
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
        return new SkillSearcher('skills', $this->words);
    }
}
