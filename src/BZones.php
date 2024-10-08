<?php

namespace Bikaraan\BZones;

use Bikaraan\BCore\Extension;

class BZones extends Extension
{
    public $name = 'bzones';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'BZones',
        'path'  => 'bzones',
        'icon'  => 'fa-gears',
    ];
}