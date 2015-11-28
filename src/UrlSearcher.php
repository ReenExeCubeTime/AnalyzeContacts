<?php

namespace ReenExe;

class UrlSearcher extends AbstractSpecialSearcher
{
    protected $type = 'urls';

    /**
     * @inheritdoc
     */
    public function search($subject)
    {
        if (preg_match_all('@((https?://)?([-\\w]+\\.[-\\w\\.]+)+\\w(:\\d+)?(/([-\\w/_\\.]*(\\?\\S+)?)?)*)@', $subject, $matches)) {
            $result = [];
            foreach ($matches[0] as $url) {
                if (strpos($subject, "@$url") === false) {
                    $result[] = $url;
                }
            }

            return $result;
        }

        return [];
    }
}
