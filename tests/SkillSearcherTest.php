<?php

namespace Tests;

use ReenExe\SkillSearcher;

class SkillSearcherTest extends AbstractSearcherTest
{
    private $words = [
        'PHP'
    ];

    public function dataProvider()
    {
        yield [
            'PHP',
            ['PHP']
        ];
    }

    protected function getSearcher()
    {
        return new SkillSearcher('skills', $this->words);
    }
}
