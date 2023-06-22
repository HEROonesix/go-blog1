<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Galeri;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Blog', Blog::count()),
            Card::make('Total Galeri', Galeri::count()),
        ];
    }
}
