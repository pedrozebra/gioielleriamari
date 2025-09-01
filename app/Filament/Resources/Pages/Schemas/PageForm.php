<?php
namespace App\Filament\Resources\Pages\Schemas;

use Filament\Schemas\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('title')->label('Titolo Pagina')->required(),

            Select::make('template')
                ->label('Template di Pagina')
                ->options([
                    'standard' => 'Pagina Standard (solo testo)',
                    'chi-siamo' => 'Template "Chi Siamo" (con immagine)',
                ])
                ->required()
                ->live(),

            RichEditor::make('content')
                ->label('Contenuto Principale')
                ->columnSpanFull(),

            FileUpload::make('featured_image')
                ->label('Immagine in Evidenza')
                ->image()->disk('public')->directory('pages')
                ->visible(fn (Get $get): bool => $get('template') === 'chi-siamo'),

            Fieldset::make('Dati SEO')->schema([
                TextInput::make('meta_title')->label('Meta Titolo'),
                TextInput::make('meta_description')->label('Meta Descrizione'),
            ]),
        ]);
    }
}
