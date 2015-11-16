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
     * @dataProvider dataProviderWrapper
     * @param $subject
     * @param array $expect
     */
    public function test($subject, array $expect)
    {
        $this->assertSame($this->team->search($subject), $expect);
    }

    public function dataProviderWrapper()
    {
        $default = [
            'phones' => [],
            'emails' => [],
            'urls' => [],
            'skypes' => [],
        ];

        foreach ($this->dataProvider() as list($subject, $expect)) {
            yield [
                $subject,
                array_merge($default, $expect)
            ];
        }
    }

    public function dataProvider()
    {
        yield [
            '',
            []
        ];

        yield [
            'Hi my name is Joe, I can be contacted at joe@mysite.com. I am also on Twitter.',
            [
                'emails' => ['joe@mysite.com']
            ]
        ];
    }
}
