<?php

use ReenExe\PhoneSearcher;

class PhoneSearcherTest extends AbstractSearcherTest
{
    public function dataProvider()
    {
        yield [
            '',
            []
        ];
    }

    protected function getSearcher()
    {
        return new PhoneSearcher();
    }
}
