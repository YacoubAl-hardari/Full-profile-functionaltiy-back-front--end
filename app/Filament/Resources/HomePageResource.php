<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\HomePage;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\HomePageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomePageResource\RelationManagers;

class HomePageResource extends Resource
{
    protected static ?string $model = HomePage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Section::make('Home page')
              ->schema(
                [
                  
                Forms\Components\TextInput::make('counter')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('text')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('labelText')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('header')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('samll_description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('paragph')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('textbutton')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\FileUpload::make('toolImage')
                    ->required(),
                Forms\Components\FileUpload::make('toolimg')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('cvFile')
                    ->required(),
                ]
              )->columns(3)
              ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('toolImage')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('toolimg')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ImageColumn::make('cvFile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('counter')
                    ->searchable(),
                Tables\Columns\TextColumn::make('text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('labelText')
                    ->searchable()
                     ->toggleable(isToggledHiddenByDefault: true)
                    ,
                Tables\Columns\TextColumn::make('header')
                    ->searchable()
                     ->toggleable(isToggledHiddenByDefault: true)
                    ,
                Tables\Columns\TextColumn::make('samll_description')
                    ->searchable()
                     ->toggleable(isToggledHiddenByDefault: true)
                    ,
                Tables\Columns\TextColumn::make('paragph')
                    ->searchable()
                     ->toggleable(isToggledHiddenByDefault: true)
                    ,
                Tables\Columns\TextColumn::make('textbutton')
                    ->searchable()
                     ->toggleable(isToggledHiddenByDefault: true)
                    ,
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
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
            'index' => Pages\ListHomePages::route('/'),
            'create' => Pages\CreateHomePage::route('/create'),
            'view' => Pages\ViewHomePage::route('/{record}'),
            'edit' => Pages\EditHomePage::route('/{record}/edit'),
        ];
    }    
}
