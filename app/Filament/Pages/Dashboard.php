<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.dashboard';

    // Add your widgets here
    protected function getHeaderWidgets(): array
    {
        return [
            \App\Filament\Widgets\LeadsCount::class,
        ];
    }
}
