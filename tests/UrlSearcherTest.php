<?php

use ReenExe\UrlSearcher;

class UrlSearcherTest extends AbstractSearcherTest
{
    public function dataProvider()
    {
        yield [
            'Сайт: www.ekonomtaxi.com.ua',
            [
                'www.ekonomtaxi.com.ua',
            ]
        ];

        yield [
            'Контакты: taxi21.in.ua, www.taxi21.in.ua, http://www.taxi21.in.ua/',
            [
                'taxi21.in.ua',
                'www.taxi21.in.ua',
                'http://www.taxi21.in.ua/',
            ]
        ];

        yield [
            'Контакты: www.kiev.taxico.com.ua',
            [
                'www.kiev.taxico.com.ua',
            ]
        ];
    }

    protected function getSearcher()
    {
        return new UrlSearcher();
    }
}
