<?php
namespace App\Filament\Resources\Repairs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RepairsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_code')
                    ->label('Codice Cliente')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('internal_tracking_code')
                    ->label('Codice Interno')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('customer_name')
                    ->label('Nome Cliente')
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Stato')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Presa in carico' => 'primary',
                        'In lavorazione' => 'gray',
                        'In attesa di ricambi' => 'danger',
                        'Pronto per il ritiro' => 'info',
                        'Consegnato' => 'success'
                    }),
                TextColumn::make('estimated_completion_date')
                    ->label('Presunta Consegna')
                    ->date()
                    ->sortable()
                    ->isoDateTime('LL'),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([EditAction::make()])
            ->bulkActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }
}
