<?php

namespace Tests;

use \ReenExe\SearcherInterface;

abstract class AbstractSearcherTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SearcherInterface
     */
    private $searcher;

    protected function setUp()
    {
        $this->searcher = $this->getSearcher();
    }

    /**
     * @dataProvider dataProvider
     * @param $subject
     * @param array $expect
     */
    public function test($subject, array $expect)
    {
        $this->assertSame($this->searcher->search($subject), $expect);
    }

    abstract public function dataProvider();

    /**
     * @return SearcherInterface
     */
    abstract protected function getSearcher();
}
