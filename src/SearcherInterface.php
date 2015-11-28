<?php

namespace ReenExe;

interface SearcherInterface
{
    /**
     * @param string $subject
     * @return array
     */
    public function search($subject);
}