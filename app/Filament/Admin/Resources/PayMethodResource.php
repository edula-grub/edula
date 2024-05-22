<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PayMethodResource\Pages;
use App\Models\PayMethod;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PayMethodResource extends Resource
{
    protected static ?string $model = PayMethod::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('total'),
                Forms\Components\TextInput::make('status'),
                Forms\Components\TextInput::make('method'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('total')->searchable(),
                Tables\Columns\TextColumn::make('status')->searchable(),
                Tables\Columns\TextColumn::make('method')->searchable(),
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
            'index' => Pages\ListPayMethods::route('/'),
            'create' => Pages\CreatePayMethod::route('/create'),
            'edit' => Pages\EditPayMethod::route('/{record}/edit'),
        ];
    }
}
