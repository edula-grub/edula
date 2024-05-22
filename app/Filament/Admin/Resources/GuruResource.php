<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\GuruResource\Pages;
use App\Models\Guru;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
// rich textbox
use Filament\Forms\Components\RichEditor;
// use model user
use App\Models\User;

class GuruResource extends Resource
{
    protected static ?string $model = Guru::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $listopsi=User::get()->pluck('name', 'id');
        $listrank=[
            "Radiant","Immortal","Divine","Ancient","Legend","Archon","Crusader","Guardian","Herald"
        ];


        return $form
            ->schema([
                Forms\Components\Select::make('user_id')->options($listopsi),
                Forms\Components\Select::make('rankup')->options($listrank),
                Forms\Components\RichEditor::make('porfolio'),
            ]);
    }

    public static function table(Table $table): Table
    {
        $table->query(function () {
            return Guru::query()->join('users', 'users.id', '=', 'gurus.user_id')->select('gurus.*', 'users.name');
        });
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')->searchable(),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('rankup')->searchable(),
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
            'index' => Pages\ListGurus::route('/'),
            'create' => Pages\CreateGuru::route('/create'),
            'edit' => Pages\EditGuru::route('/{record}/edit'),
        ];
    }
}
