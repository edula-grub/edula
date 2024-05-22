<?php

namespace App\Filament\Siswa\Resources;

use App\Filament\Siswa\Resources\SertifandskilResource\Pages;
use App\Models\Sertifandskil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SertifandskilResource extends Resource
{
    protected static ?string $model = Sertifandskil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('guru_id')->numeric(),
                Forms\Components\Textarea::make('sertifdoc'),
                Forms\Components\Textarea::make('credensial'),
                Forms\Components\Textarea::make('skil'),
                Forms\Components\TextInput::make('level'),
                Forms\Components\TextInput::make('approved')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('level')->searchable(),

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
            'index' => Pages\ListSertifandskils::route('/'),
            'create' => Pages\CreateSertifandskil::route('/create'),
            'edit' => Pages\EditSertifandskil::route('/{record}/edit'),
        ];
    }
}
