<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('role')
                    ->label('Peran/Jabatan')
                    ->placeholder('Contoh: Warga Plalar, Pelanggan Setia'),
                \Filament\Forms\Components\Textarea::make('content')
                    ->label('Ulasan')
                    ->required()
                    ->rows(4),
                \Filament\Forms\Components\Select::make('stars')
                    ->label('Bintang')
                    ->options([
                        '5' => '5 Bintang',
                        '4.5' => '4.5 Bintang',
                        '4' => '4 Bintang',
                        '3.5' => '3.5 Bintang',
                        '3' => '3 Bintang',
                        '2' => '2 Bintang',
                        '1' => '1 Bintang',
                    ])
                    ->default('5')
                    ->required(),
                \Filament\Forms\Components\FileUpload::make('avatar')
                    ->label('Foto Profil (Opsional)')
                    ->image()
                    ->directory('testimonials')
                    ->disk('public'),
                \Filament\Forms\Components\TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
