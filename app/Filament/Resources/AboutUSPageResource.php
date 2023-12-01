<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\AboutUSPage;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AboutUSPageResource\Pages;
use App\Filament\Resources\AboutUSPageResource\RelationManagers;

class AboutUSPageResource extends Resource
{
    protected static ?string $model = AboutUSPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                Section::make('info')
                    ->schema(
                        [
                            Forms\Components\TextInput::make('about_us_title')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('about_description')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('infolabel')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('button_text')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\FileUpload::make('image')
                                ->image()
                                ->columnSpanFull()
                                ->required(),

                            Repeater::make('info')
                                ->schema([
                                    Forms\Components\TextInput::make('fristName')
                                        ->required(),
                                    Forms\Components\TextInput::make('lastname')
                                        ->required(),
                                    Forms\Components\TextInput::make('address')
                                        ->required(),
                                    Forms\Components\TextInput::make('phone')
                                        ->required(),
                                    Forms\Components\TextInput::make('email')
                                        ->required(),
                                    Forms\Components\TextInput::make('age')
                                        ->required(),
                                    Forms\Components\TextInput::make('nationality')
                                        ->required(),
                                    Forms\Components\TextInput::make('freelance')
                                        ->required(),
                                    Forms\Components\TagsInput::make('skype')
                                        ->required(),
                                    Forms\Components\TagsInput::make('languages')
                                        ->required(),


                                ])
                                ->columnSpanFull()
                                ->columns(4)
                                ->disableItemCreation()
                                ->disableItemDeletion(),
                        ]
                    )->columns(4),


                Section::make('SKILLs title')
                    ->schema(
                        [


                            Forms\Components\TextInput::make('SKILLs_title')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('SKILLs_header')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('Skills_description')
                                ->required()
                                ->maxLength(255),

                                Repeater::make('tools')
                                ->schema([
                                    Forms\Components\TextInput::make('tool')
                                        ->required(),
                                        Forms\Components\TextInput::make('number')
                                        ->numeric()
                                        ->required(),
                                ])->columnSpanFull()
                                ->grid(4),

                        ]
                    )->columnSpanFull()
                    ->columns(3),

                Section::make('Experience Details')
                    ->schema(
                        [
                            Forms\Components\TextInput::make('number_of_Experience')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('Experience_text')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('EXPERICNCE_AND_EDUCATION')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('EXPERICNCE_AND_EDUCATION_desc')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('EXPERICNCE_AND_EDUCATION_header')
                                ->required()
                                ->columnSpanFull()
                                ->maxLength(255),
    
                            Repeater::make('EXPERICNCE_json')
                                ->schema(
                                    [
                                        Forms\Components\TextInput::make('title')
                                        ->required(),
                                        Forms\Components\TextInput::make('positionorcompnay')
                                        ->required(),
                                        Forms\Components\TextInput::make('descritpion_EXPERICNC')
                                        ->required(),
                                        Forms\Components\TextInput::make('data_of_EXPERICNC')
                                        ->required(),
                                        FileUpload::make('icon')
                                        ->columnSpanFull()
                                            ->required(),
                                    ]
                                )->columnSpanFull()
                                ->columns(2),

                        ]
                    )->columns(4),



        
                Section::make('beanners')
                    ->schema(
                        [
                            Repeater::make('beanners')
                                ->schema([
                                    FileUpload::make('lightImage')
                                        ->required(),
                                    FileUpload::make('darkImage')
                                        ->required(),
                                ])->columnSpanFull()
                                ->grid(4)
                                ,
                        ]
                    )
                    
                    ->columns(3)
                    ,




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('about_us_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('about_description')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('infolabel')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('number_of_Experience')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Experience_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('EXPERICNCE_AND_EDUCATION')
                    ->searchable(),
                Tables\Columns\TextColumn::make('EXPERICNCE_AND_EDUCATION _desc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('EXPERICNCE_AND_EDUCATION _header')
                    ->searchable(),
                Tables\Columns\TextColumn::make('SKILLs_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('SKILLs_header')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Skills_description')
                    ->searchable(),
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
            'index' => Pages\ListAboutUSPages::route('/'),
            'create' => Pages\CreateAboutUSPage::route('/create'),
            'view' => Pages\ViewAboutUSPage::route('/{record}'),
            'edit' => Pages\EditAboutUSPage::route('/{record}/edit'),
        ];
    }
}
