<?php
namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\Textarea;
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
            TextInput::make('title')
                ->label('Titolo Pagina (per il menu e l\'URL)')
                ->required()
                ->columnSpanFull(),

            Select::make('template')
                ->label('Template di Pagina')
                ->options([
                    'standard' => 'Pagina Standard (solo testo)',
                    'chi-siamo' => 'Template "Chi Siamo"',
                ])
                ->required()
                ->live(),

            RichEditor::make('content')
                ->label('Contenuto Principale')
                ->columnSpanFull()
                ->visible(fn (Get $get): bool => $get('template') === 'standard'),

            Fieldset::make('Contenuti per Template "Chi Siamo"')
                ->schema([
                    TextInput::make('extra_content.hero_title')
                        ->label('Titolo Grande Iniziale (es. La Nostra Storia)'),

                    Textarea::make('extra_content.hero_subtitle')
                        ->label('Sottotitolo Iniziale'),

                    FileUpload::make('featured_image')
                        ->label('Immagine in Evidenza')
                        ->image()
                        ->disk('public') // <-- Specifica ESPLICITAMENTE di usare il disco pubblico
                        ->directory('pages')
                        // Aggiungi questa riga per accettare i formati moderni
                        ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/avif'])
                        ->visible(fn (Get $get): bool => $get('template') === 'chi-siamo'),

                    TextInput::make('extra_content.section_title')
                        ->label('Titolo Sezione Destra (es. Una Tradizione di Eccellenza)'),

                    RichEditor::make('extra_content.section_content_block_one')
                        ->label('Testo Sezione Destra Blocco 1'),
                    RichEditor::make('extra_content.section_content_block_two')
                        ->label('Testo Sezione Destra Blocco 2'),
                ])
                ->columnSpanFull()
                ->visible(fn (Get $get): bool => $get('template') === 'chi-siamo'),

            Fieldset::make('Dati SEO')->schema([
                TextInput::make('meta_title')->label('Meta Titolo'),
                TextInput::make('meta_description')->label('Meta Descrizione'),
            ]),
        ]);
    }
}
