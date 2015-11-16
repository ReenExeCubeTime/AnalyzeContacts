<?php

use ReenExe\DetectiveBuilder;
use ReenExe\SearcherTeam;

class DetectiveTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SearcherTeam
     */
    private $team;

    protected function setUp()
    {
        $builder = new DetectiveBuilder();
        $this->team = $builder->getContactSearcherTeam();
    }

    /**
     * @dataProvider dataProvider
     * @param $subject
     * @param array $expect
     */
    public function test($subject, array $expect)
    {
        $this->assertSame($this->team->search($subject), $expect);
    }

    public function dataProvider()
    {
        yield [
            '',
            [
                'phones' => []
            ]
        ];
    }
}
