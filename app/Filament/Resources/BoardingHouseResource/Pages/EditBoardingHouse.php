<?php

namespace App\Filament\Resources\BoardingHouseResource\Pages;

use App\Filament\Resources\BoardingHouseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBoardingHouse extends EditRecord
{
    protected static string $resource = BoardingHouseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    //redirect to list after create
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
