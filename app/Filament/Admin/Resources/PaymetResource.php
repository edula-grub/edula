<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PaymetResource\Pages;
use App\Models\Paymet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PaymetResource extends Resource
{
    protected static ?string $model = Paymet::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $label = 'List Pembayaran';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('total'),
                Forms\Components\TextInput::make('status'),
                Forms\Components\TextInput::make('method_id'),
                Forms\Components\TextInput::make('user_id'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('total')->searchable(),
                Tables\Columns\TextColumn::make('status')->searchable(),
                Tables\Columns\TextColumn::make('method_id')->searchable(),
                Tables\Columns\TextColumn::make('user_id')->searchable(),
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
            'index' => Pages\ListPaymets::route('/'),
            'create' => Pages\CreatePaymet::route('/create'),
            'edit' => Pages\EditPaymet::route('/{record}/edit'),
        ];
    }
}
