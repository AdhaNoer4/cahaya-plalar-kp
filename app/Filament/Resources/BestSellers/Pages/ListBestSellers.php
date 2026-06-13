<?php

namespace App\Filament\Resources\BestSellers\Pages;

use App\Filament\Resources\BestSellers\BestSellerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBestSellers extends ListRecords
{
    protected static string $resource = BestSellerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
