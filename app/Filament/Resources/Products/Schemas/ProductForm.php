<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                // Contenitore principale a griglia (2/3 per i dati, 1/3 per le immagini)
                Grid::make(3)
                    ->schema([
                        // Colonna principale che occupa 2 span
                        Grid::make(1)->columnSpan(2)->schema([
                            // Usiamo Fieldset per raggruppare visivamente i campi
                            Fieldset::make('Informazioni Principali')
                                ->schema([
                                    TextInput::make('name')
                                        ->label('Nome Prodotto')
                                        ->required()
                                        ->maxLength(255),

                                    Textarea::make('description')
                                        ->label('Descrizione')
                                        ->required()
                                        ->columnSpanFull(),

                                    TextInput::make('price')
                                        ->label('Prezzo')
                                        ->required()
                                        ->numeric()
                                        ->prefix('€'),
                                ])->columns(2),

                            Fieldset::make('SEO & Open Graph')
                                ->schema([
                                    TextInput::make('meta_title')
                                        ->label('Meta Titolo'),

                                    TextInput::make('meta_description')
                                        ->label('Meta Descrizione'),
                                ]),
                        ]),

                        // Colonna laterale che occupa 1 span
                        Grid::make(1)->columnSpan(1)->schema([
                            Fieldset::make('Immagini')
                                ->schema([
                                    FileUpload::make('image_path')
                                        ->label('Immagine Principale')
                                        ->image()
                                        ->directory('product-images'),

                                    FileUpload::make('og_image_path')
                                        ->label('Immagine per Social (Opzionale)')
                                        ->helperText('Se non specificata, verrà usata l\'immagine principale.')
                                        ->image()
                                        ->directory('product-og-images'),
                                ]),
                        ]),
                    ]),
            ]);
    }
}
