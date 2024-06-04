<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\FinalsialreportResource\Pages;
use App\Models\Finalsialreport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FinalsialreportResource extends Resource
{
    protected static ?string $model = Finalsialreport::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $label = 'Finansial Report';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('task1'),
                Forms\Components\TextInput::make('task5'),
                Forms\Components\TextInput::make('task6'),
                Forms\Components\TextInput::make('task2'),
                Forms\Components\TextInput::make('task3'),
                Forms\Components\TextInput::make('task4'),
                Forms\Components\TextInput::make('task7'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('task1')->searchable(),
                Tables\Columns\TextColumn::make('task5')->searchable(),
                Tables\Columns\TextColumn::make('task6')->searchable(),
                Tables\Columns\TextColumn::make('task2')->searchable(),
                Tables\Columns\TextColumn::make('task3')->searchable(),
                Tables\Columns\TextColumn::make('task4')->searchable(),
                Tables\Columns\TextColumn::make('task7')->searchable(),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFinalsialreports::route('/'),
            'create' => Pages\CreateFinalsialreport::route('/create'),
            'edit' => Pages\EditFinalsialreport::route('/{record}/edit'),
        ];
    }
}
