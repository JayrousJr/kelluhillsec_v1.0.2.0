<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class Welcome extends Widget
{
    protected static bool $isLazy = false;

    protected static string $view = 'filament.widgets.welcome';
}