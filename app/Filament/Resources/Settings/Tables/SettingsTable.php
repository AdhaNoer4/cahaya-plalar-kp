<?php

namespace App\Filament\Resources\Settings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('whatsapp_formatted')
                    ->label('WhatsApp'),
                \Filament\Tables\Columns\TextColumn::make('email')
                    ->label('Email'),
                \Filament\Tables\Columns\TextColumn::make('address')
                    ->label('Alamat')
                    ->limit(50),
                \Filament\Tables\Columns\TextColumn::make('jam_operasional_weekday')
                    ->label('Jam Weekday'),
                \Filament\Tables\Columns\TextColumn::make('jam_operasional_weekend')
                    ->label('Jam Weekend'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                //
            ]);
    }
}
