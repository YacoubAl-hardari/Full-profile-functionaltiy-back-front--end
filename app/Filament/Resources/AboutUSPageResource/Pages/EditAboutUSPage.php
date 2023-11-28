<?php

namespace App\Filament\Resources\AboutUSPageResource\Pages;

use App\Filament\Resources\AboutUSPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutUSPage extends EditRecord
{
    protected static string $resource = AboutUSPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
