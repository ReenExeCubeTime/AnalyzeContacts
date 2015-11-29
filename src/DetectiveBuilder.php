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
        $team
            ->add(new PhoneSearcher())
            ->add(new UrlSearcher())
        ;
        return $team;
    }
}
