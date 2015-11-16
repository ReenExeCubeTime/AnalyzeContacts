<?php

namespace ReenExe;

class DetectiveBuilder
{
    /**
     * @return SearcherTeam
     */
    public function getContactSearcherTeam()
    {
        $team = new SearcherTeam();
        $team->add(new PhoneSearcher());
        return $team;
    }
}
