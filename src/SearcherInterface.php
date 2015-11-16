<?php

namespace ReenExe;

interface SearcherInterface
{
    /**
     * @return array
     */
    public function search($subject);
}