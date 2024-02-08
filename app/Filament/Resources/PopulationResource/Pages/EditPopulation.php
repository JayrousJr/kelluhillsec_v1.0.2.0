<?php

namespace App\Filament\Resources\PopulationResource\Pages;

use App\Filament\Resources\PopulationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPopulation extends EditRecord
{
    protected static string $resource = PopulationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
