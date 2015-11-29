<?php

namespace ReenExe;

class PhoneSearcher extends AbstractSpecialSearcher
{
    protected $type = 'phones';

    /**
     * @inheritdoc
     */
    public function search($subject)
    {
        $codeList = [
            '044',

            '050',
            '063',
            '066',
            '067',
            '068',
            '073',
            '091',
            '092',
            '093',
            '094',
            '095',
            '096',
            '097',
            '098',
            '099',
        ];

        $codeListString = join('|', $codeList);
        $code = "(\(($codeListString)\)|($codeListString))";

        $separator = '( |-)?';
        $main = join($separator, array_fill(0, 7, '\d{1}'));

        $list = [
            // +38 (044) 237-70-70
            "\+38$separator$code$separator$main",
            // 8 (044) 237-93-93
            "8$separator$code$separator$main",
            // 044-270-0000
            // (044) 465-5-465
            // (093)290-37-85
            // (093) 970-70-99
            // 0442772777
            "$code$separator$main",
        ];

        $regex = '@(' . join('|', $list). ')@';

        if (preg_match_all($regex, $subject, $matches)) {
            return $matches[0];
        }

        return [];
    }
}
