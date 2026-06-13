<?php

namespace App\Filament\Resources\BestSellers;

use App\Filament\Resources\BestSellers\Pages\CreateBestSeller;
use App\Filament\Resources\BestSellers\Pages\EditBestSeller;
use App\Filament\Resources\BestSellers\Pages\ListBestSellers;
use App\Filament\Resources\BestSellers\Schemas\BestSellerForm;
use App\Filament\Resources\BestSellers\Tables\BestSellersTable;
use App\Models\BestSeller;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BestSellerResource extends Resource
{
    protected static ?string $model = BestSeller::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-fire';

    protected static ?string $navigationLabel = 'Paling Banyak Dibeli';

    protected static string | \UnitEnum | null $navigationGroup = 'Master Data';

    public static function form(Schema $schema): Schema
    {
        return BestSellerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BestSellersTable::configure($table);
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
            'index' => ListBestSellers::route('/'),
            'create' => CreateBestSeller::route('/create'),
            'edit' => EditBestSeller::route('/{record}/edit'),
        ];
    }
}
