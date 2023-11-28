<?php

namespace App\Filament\Resources\AboutUSPageResource\Pages;

use App\Filament\Resources\AboutUSPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutUSPages extends ListRecords
{
    protected static string $resource = AboutUSPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
