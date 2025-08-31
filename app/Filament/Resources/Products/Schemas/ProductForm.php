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
                Grid::make(5)
                    ->schema([
                        Grid::make(1)->columnSpan(3)->schema([
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
                        Grid::make(1)->columnSpan(2)->schema([
                            Fieldset::make('Immagini')
                                ->schema([
                                    FileUpload::make('image_path')
                                        ->label('Immagine Principale')
                                        ->image()
                                        ->imageEditor()
                                        ->imageCropAspectRatio('1:1')
                                        ->imageResizeTargetWidth('1080')
                                        ->imageResizeTargetHeight('1080')
                                        ->disk('public')
                                        ->directory('product-images')
                                        ->required(),

                                    FileUpload::make('og_image_path')
                                        ->label('Immagine per Social (Opzionale)')
                                        ->helperText('Se non specificata, verrà usata l\'immagine principale.')
                                        ->image()
                                        ->disk('public')
                                        ->directory('product-og-images')
                                        ->imageEditor(),
                                ])->columns(1),
                        ]),
                    ]),
            ]);
    }
}
