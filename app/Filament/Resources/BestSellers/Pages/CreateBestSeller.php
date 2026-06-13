<?php

namespace App\Filament\Resources\BestSellers\Pages;

use App\Filament\Resources\BestSellers\BestSellerResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBestSeller extends CreateRecord
{
    protected static string $resource = BestSellerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
