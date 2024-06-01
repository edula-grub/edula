<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BidchatResource\Pages;
use App\Models\Bidchat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BidchatResource extends Resource
{
    protected static ?string $model = Bidchat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('bidrequest_id'),
                Forms\Components\TextInput::make('sender_id'),
                Forms\Components\TextInput::make('reader_id'),
                Forms\Components\Textarea::make('pesan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bidrequest_id')->searchable(),
                Tables\Columns\TextColumn::make('sender_id')->searchable(),
                Tables\Columns\TextColumn::make('reader_id')->searchable(),

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
            'index' => Pages\ListBidchats::route('/'),
            'create' => Pages\CreateBidchat::route('/create'),
            'edit' => Pages\EditBidchat::route('/{record}/edit'),
        ];
    }
}
