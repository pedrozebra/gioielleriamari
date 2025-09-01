<?php

namespace App\Filament\Resources\Repairs;

use App\Filament\Resources\Repairs\Pages\CreateRepair;
use App\Filament\Resources\Repairs\Pages\EditRepair;
use App\Filament\Resources\Repairs\Pages\ListRepairs;
use App\Filament\Resources\Repairs\Schemas\RepairForm;
use App\Filament\Resources\Repairs\Tables\RepairsTable;
use App\Models\Repair;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RepairResource extends Resource
{
    protected static ?string $model = Repair::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'customer_code';
    protected static ?string $navigationLabel = 'Riparazioni';
    protected static ?string $modelLabel = 'Riparazione';
    protected static ?string $pluralModelLabel = 'Riparazioni';

    public static function form(Schema $schema): Schema
    {
        return RepairForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RepairsTable::configure($table);
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
            'index' => ListRepairs::route('/'),
            'create' => CreateRepair::route('/create'),
            'edit' => EditRepair::route('/{record}/edit'),
        ];
    }
}
