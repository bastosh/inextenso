<?php


class Color
{
    protected $colors = [];

    /**
     * Color constructor.
     * @param array $colors
     */
    public function __construct(array $colors)
    {
        $this->colors = $colors;
    }

    public function generate()
    {
        return $this->colors[c_rand($this->colors)];
    }

}