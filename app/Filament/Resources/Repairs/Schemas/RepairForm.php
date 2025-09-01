<?php
namespace App\Filament\Resources\Repairs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Fieldset;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RepairForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Fieldset::make('Dati Cliente e Prodotto')->schema([
                TextInput::make('customer_code')
                    ->label('Codice Cliente (manuale)')
                    ->helperText('Il codice scritto sulla ricevuta del cliente.'),
                TextInput::make('customer_name')
                    ->label('Nome Cliente')
                    ->required(),
                Textarea::make('product_details')
                    ->label('Dettagli Prodotto')
                    ->required()
                    ->rows(3),
                Textarea::make('issue_description')
                    ->label('Problema Riscontrato')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
            ])->columns(2),

            Fieldset::make('Stato e Tempistiche')->schema([
                Select::make('status')
                    ->label('Stato della Riparazione')
                    ->options([
                        'Presa in carico' => 'Presa in carico',
                        'In lavorazione' => 'In lavorazione',
                        'In attesa di ricambi' => 'In attesa di ricambi',
                        'Pronto per il ritiro' => 'Pronto per il ritiro',
                        'Consegnato' => 'Consegnato',
                    ])
                    ->columnSpanFull()
                    ->required(),
                DatePicker::make('delivery_date')
                    ->label('Data di Consegna Cliente')
                    ->required(),
                DatePicker::make('estimated_completion_date')
                    ->label('Data Presunta Consegna'),
            ])->columns(2),
        ]);
    }
}
