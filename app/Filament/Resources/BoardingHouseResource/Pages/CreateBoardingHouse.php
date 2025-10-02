<?php

namespace App\Filament\Resources\BoardingHouseResource\Pages;

use App\Filament\Resources\BoardingHouseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBoardingHouse extends CreateRecord
{
    protected static string $resource = BoardingHouseResource::class;

    //redirect to list after create
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
