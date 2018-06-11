<?php

class MotivationController extends Controller
{
    public function show()
    {
        $motivations = file(SRC.'motivations');
        $motivationGenerator = new Motivation($motivations);
        $motivation = $motivationGenerator->generate();
        $colors = file(SRC.'colors');
        $colorgenerator = new Color($colors);
        $color = $colorgenerator->generate();
        return $this->render('motivations/show', compact('motivation', 'color'));
    }
}
