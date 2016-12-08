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

        yield [
            'php',
            ['PHP']
        ];
    }

    protected function getSearcher()
    {
        return new SkillSearcher('skills', $this->words);
    }
}
