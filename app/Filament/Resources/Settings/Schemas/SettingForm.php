<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('whatsapp')
                    ->label('Nomor WhatsApp (Angka saja, misal: 6285293756658)')
                    ->required()
                    ->helperText('Gunakan format kode negara tanpa tanda + atau spasi (misal: 62 untuk Indonesia).'),
                \Filament\Forms\Components\TextInput::make('whatsapp_formatted')
                    ->label('Tampilan Nomor WhatsApp (misal: +62 852-9375-6658)')
                    ->required(),
                \Filament\Forms\Components\Textarea::make('address')
                    ->label('Alamat Lengkap')
                    ->required()
                    ->rows(3),
                \Filament\Forms\Components\TextInput::make('jam_operasional_weekday')
                    ->label('Jam Operasional Weekday (misal: Senin - Sabtu: 07.00 - 21.00)')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('jam_operasional_weekend')
                    ->label('Jam Operasional Weekend (misal: Minggu: 08.00 - 17.00)')
                    ->required(),
            ]);
    }
}
