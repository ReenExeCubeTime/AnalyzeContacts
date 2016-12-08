<?php

namespace Tests;

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
            'urls' => [],
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
            'Контакты: (044) 465-5-465, (067) 465-5-465, (063) 465-5-465, (066) 348-9-888, Сайт: www.liketaxi.org',
            [
                'phones' => [
                    '(044) 465-5-465',
                    '(067) 465-5-465',
                    '(063) 465-5-465',
                    '(066) 348-9-888',
                ],
                'urls' => [
                    'www.liketaxi.org'
                ],
            ]
        ];
    }
}
