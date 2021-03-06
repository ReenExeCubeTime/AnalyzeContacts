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
        $pre = "\+?(38|8|7)";
        $separator = '[ -]?';

        $code = $this->getCode(3);
        $main = join($separator, array_fill(0, 7, '\d{1}'));


        $list = [
            // +38 (044) 237-70-70
            // 8 (044) 237-93-93
            // +7 (978) 100-41-40
            "$pre$separator$code$separator$main",
            // 044 2337233
            // 044-270-0000
            // (044) 465-5-465
            // (093)290-37-85
            // (093) 970-70-99
            // 0442772777
            "$code$separator$main",
        ];

        $code = $this->getCode(4);
        $main = join($separator, array_fill(0, 6, '\d{1}'));

        // +38 (0412) 46-02-02
        $list[] = "$pre$separator$code$separator$main";
        // (0412) 55-15-15
        $list[] = "$code$separator$main";

        // 603
        // 1560
        // 555-000
        $short = range(7, 3);
        foreach ($short as $length) {
            $list[] = join($separator, array_fill(0, $length, '\d{1}'));
        }

        $regex = '@(' . join('|', $list). ')@';

        if (preg_match_all($regex, $subject, $matches)) {
            return array_unique($matches[0]);
        }

        return [];
    }

    private function getCode($length)
    {
        $digits = '\d{' . $length . '}';
        return "(\($digits\)|$digits)";
    }
}
