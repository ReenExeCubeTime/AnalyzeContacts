<?php

use ReenExe\EmailSearcher;

class EmailSearcherTest extends AbstractSearcherTest
{
    public function dataProvider()
    {
        yield [
            'Hi my name is Joe, I can be contacted at joe@mysite.com. I am also on Twitter.',
            [
                'joe@mysite.com',
            ]
        ];

        yield [
            'My: reen@mail.com and Friend: alex@mail.com',
            [
                'reen@mail.com',
                'alex@mail.com',
            ]
        ];
    }

    protected function getSearcher()
    {
        return new EmailSearcher();
    }
}
