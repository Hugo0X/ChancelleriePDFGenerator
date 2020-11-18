<?php

namespace App\Twig;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class appExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('feminine', [$this, 'feminine']),
        ];
    }

    public function feminine($gender)
    {
        if($gender == 'Féminin')
        {
            return $addE = 'e';
        }
    }
}
