<?php

namespace App\Filament\Resources\Testimonials\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class TestimonialsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('role')
                    ->label('Peran/Jabatan'),
                \Filament\Tables\Columns\TextColumn::make('stars')
                    ->label('Bintang'),
                \Filament\Tables\Columns\ImageColumn::make('avatar')
                    ->label('Foto Profil')
                    ->disk('public')
                    ->circular(),
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
