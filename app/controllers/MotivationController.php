<?php

class MotivationController extends Controller
{
    public function show()
    {
        $src = file(SRC.'motivations');
        $motivationGenerator = new Motivation($src);
        $motivation = $motivationGenerator->generate();

        return $this->render('motivations/show', compact('motivation'));
    }
}
