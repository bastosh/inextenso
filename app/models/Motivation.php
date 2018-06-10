<?php

class Motivation
{

    protected $motivations = [];

    /**
     * Motivation constructor.
     * @param array $motivations
     */
    public function __construct(array $motivations)
    {
        $this->motivations = $motivations;
    }

    public function generate()
    {
        return trim($this->motivations[c_rand($this->motivations)]);
    }
}
