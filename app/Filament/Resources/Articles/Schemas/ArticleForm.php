<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Article Information')->schema([
                    TextInput::make('title')
                        ->required(),
                    TextInput::make('slug')
                        ->required(),
                    Select::make('categories')
                        ->relationship('categories', 'name')
                        ->multiple()
                        ->preload()
                        ->searchable()
                        ->required(),
                    TextInput::make('author')
                        ->required(),
                    FileUpload::make('image')
                        ->image(),
                    RichEditor::make('description')
                        ->required()
                        ->columnSpanFull(),
                ])->columns(2)->columnSpanFull(),
                Section::make('Meta Information')->schema([
                    TextInput::make('meta_title')
                        ->default(null),
                    Textarea::make('meta_keyword')
                        ->default(null)
                        ->columnSpanFull(),
                    Textarea::make('meta_description')
                        ->default(null)
                        ->columnSpanFull(),
                ])->columns(2)->columnSpanFull()
            ]);
    }
}
