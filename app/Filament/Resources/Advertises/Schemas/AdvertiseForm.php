<?php

namespace App\Filament\Resources\Advertises\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AdvertiseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Advertisement Information')->schema([
                    TextInput::make('company_name')
                        ->required(),
                    TextInput::make('redirect_link')
                        ->default(null),
                    TextInput::make('contact')
                        ->default(null),
                    DatePicker::make('expire_date')
                        ->required(),
                    FileUpload::make('banner')
                        ->image()
                        ->required(),
                ])->columnSpanFull()->columns(2)
            ]);
    }
}
