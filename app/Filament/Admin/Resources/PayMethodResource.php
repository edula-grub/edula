<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PaymethodResource\Pages;
use App\Models\Paymethod;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PaymethodResource extends Resource
{
    protected static ?string $model = Paymethod::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $label = 'List Metode Pembayaran';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('payment_method'),
                Forms\Components\TextInput::make('logo_payment_method'),
                Forms\Components\TextInput::make('account_number'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('payment_method')->searchable(),
                Tables\Columns\TextColumn::make('logo_payment_method')->searchable(),
                Tables\Columns\TextColumn::make('account_number')->searchable(),
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
            'index' => Pages\ListPaymethods::route('/'),
            'create' => Pages\CreatePaymethod::route('/create'),
            'edit' => Pages\EditPaymethod::route('/{record}/edit'),
        ];
    }
}
