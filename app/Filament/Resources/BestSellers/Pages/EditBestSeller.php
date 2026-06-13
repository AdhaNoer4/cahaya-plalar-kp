<?php

namespace App\Filament\Resources\BestSellers\Pages;

use App\Filament\Resources\BestSellers\BestSellerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBestSeller extends EditRecord
{
    protected static string $resource = BestSellerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
