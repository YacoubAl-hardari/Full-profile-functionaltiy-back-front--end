<?php

namespace App\Filament\Resources\AboutUSPageResource\Pages;

use App\Filament\Resources\AboutUSPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAboutUSPage extends ViewRecord
{
    protected static string $resource = AboutUSPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
