<?php

namespace App\Filament\Resources\BestSellers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class BestSellersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('product.nama_produk')
                    ->label('Nama Produk')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('product.category.nama_kategori')
                    ->label('Kategori'),
                \Filament\Tables\Columns\TextColumn::make('product.harga')
                    ->label('Harga')
                    ->money('IDR'),
                \Filament\Tables\Columns\ImageColumn::make('product.gambar')
                    ->label('Gambar')
                    ->disk('public'),
                \Filament\Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
