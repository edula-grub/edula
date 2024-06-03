<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BiderlistResource\Pages;
use App\Models\Biderlist;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BiderlistResource extends Resource
{
    protected static ?string $model = Biderlist::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('bidrequest_id')->numeric(),
                Forms\Components\TextInput::make('guru_id')->numeric(),
                Forms\Components\Textarea::make('harga'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

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
            'index' => Pages\ListBiderlists::route('/'),
            'create' => Pages\CreateBiderlist::route('/create'),
            'edit' => Pages\EditBiderlist::route('/{record}/edit'),
        ];
    }
}
