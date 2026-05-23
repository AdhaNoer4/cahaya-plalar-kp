<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use UnitEnum;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-cube';

    protected static ?string $navigationLabel = 'Produk';

    protected static string | UnitEnum | null $navigationGroup = 'Master Data';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('nama_produk')
                    ->label('Nama Produk')
                    ->required(),
                Select::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('category', 'nama_kategori'),
                TextInput::make('harga')
                    ->label('Harga')
                    ->numeric()
                    ->required()
                    ->prefix('Rp'),
                TextInput::make('stok')
                    ->label('Stok')
                    ->numeric()
                    ->required(),
                FileUpload::make('gambar')
                    ->label('Gambar Produk')
                    ->image()
                    ->directory('products')
                    ->disk('public'),
                Textarea::make('deskripsi')
                    ->label('Deskripsi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_produk')
                    ->label('Nama Produk')
                    ->searchable(),
                TextColumn::make('category.nama_kategori')
                    ->label('Kategori'),
                TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR'),
                TextColumn::make('stok')
                    ->label('Stok'),
                ImageColumn::make('gambar')
                    ->label('Gambar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
