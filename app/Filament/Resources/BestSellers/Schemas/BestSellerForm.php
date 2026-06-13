<?php

namespace App\Filament\Resources\BestSellers\Schemas;

use Filament\Schemas\Schema;

class BestSellerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('product_id')
                    ->label('Produk')
                    ->relationship('product', 'nama_produk')
                    ->required()
                    ->unique('best_sellers', 'product_id', ignoreRecord: true),
                \Filament\Forms\Components\TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0)
                    ->required(),
            ]);
    }
}
