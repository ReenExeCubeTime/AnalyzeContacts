<?php

namespace Tests;

use ReenExe\SkillSearcher;

class SkillSearcherTest extends AbstractSearcherTest
{
    private $words = [
        'PHP',
        'MySQL',
        'JavaScript',
        'Redis',
        'Elasticsearch',
        'Symfony',
        'PHPUnit',
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

        yield [
            'PHP, MySQL, JavaScript',
            ['PHP', 'MySQL', 'JavaScript']
        ];

        yield [
            'PHP & MySQL & JavaScript',
            ['PHP', 'MySQL', 'JavaScript']
        ];

        yield [
            'PHP | MySQL | JavaScript',
            ['PHP', 'MySQL', 'JavaScript']
        ];

        yield [
            'In project we JavaScript in Front, PHP|MySQL in server, and Go in micro service',
            ['PHP', 'MySQL', 'JavaScript']
        ];
    }

    protected function getSearcher()
    {
        return new SkillSearcher('skills', $this->words);
    }
}
