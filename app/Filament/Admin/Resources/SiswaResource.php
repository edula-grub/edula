<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Siswa;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\DB;
use App\Filament\Admin\Resources\SiswaResource\Pages;

class SiswaResource extends Resource
{
    protected static ?string $model = Siswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $siswa=DB::table('siswas')->join('users', 'users.id', '=', 'siswas.user_id')->select('siswas.*', 'users.name')->get()->pluck('name', 'id');

        return $form
            ->schema([
                Forms\Components\Select::make('user_id')->options($siswa)->label("Siswa"),
                Forms\Components\FileUpload::make('ktm')->image()->label("Kartu Tanda Pelajar"),
                Forms\Components\Textarea::make('profile')->image()->avatar()->label("Foto Profil"),
            ]);
    }

    public static function table(Table $table): Table
    {
        $table->query(function () {
            return Siswa::query()->join('users', 'users.id', '=', 'siswas.user_id')->select('siswas.*', 'users.name');
        });
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\ImageColumn::make('profile'),
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
            'index' => Pages\ListSiswas::route('/'),
            'create' => Pages\CreateSiswa::route('/create'),
            'edit' => Pages\EditSiswa::route('/{record}/edit'),
        ];
    }
}
