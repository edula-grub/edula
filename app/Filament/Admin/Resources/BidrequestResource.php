<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Bidrequest;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use App\Filament\Admin\Resources\BidrequestResource\Pages;

class BidrequestResource extends Resource
{
    protected static ?string $model = Bidrequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $gurus = DB::table('gurus')->join('users', 'users.id', '=', 'gurus.user_id')->select('gurus.*', 'users.name')->get()->pluck('name', 'id');
        $siswas = DB::table('siswas')->join('users', 'users.id', '=', 'siswas.user_id')->select('siswas.*', 'users.name')->get()->pluck('name', 'id');
        $status = [
            "pending","accepted","rejected"
        ];
        $rate = [
            "*","**","***","****","*****"
        ];
        return $form
            ->schema([
                Forms\Components\Select::make('siswa_id')->options($siswas)->label("Siswa"),
                Forms\Components\Select::make('guru_id')->options($gurus)->label("Guru"),
                Forms\Components\Textarea::make('nama_mapel')->label("Mata Pelajaran"),
                Forms\Components\RichEditor::make('deskripsi_kebutuhan')->label("Deskripsi Kebutuhan"),
                Forms\Components\DateTimePicker::make('jadwal')->label("Jadwal Temu"),
                Forms\Components\TextInput::make('biderprice')->numeric()->placeholder("Harga Penawaran"),
                Forms\Components\Select::make('status')->options($status),
                Forms\Components\RichEditor::make('review'),
                Forms\Components\Textarea::make('gtos')->label("Komentar untuk Siswa"),
                Forms\Components\Textarea::make('stog')->label("Komentar untuk Guru"),
                Forms\Components\Select::make('gsts')->options($rate)->label("Rating Guru"),
                Forms\Components\Select::make('sstg')->options($rate)->label("Rating Siswa"),
                Forms\Components\Textarea::make('etc'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_mapel')->searchable(),
                Tables\Columns\TextColumn::make('biderprice')->searchable(),
                Tables\Columns\TextColumn::make('jadwal')->searchable(),
                Tables\Columns\TextColumn::make('status')->searchable(),
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
            'index' => Pages\ListBidrequests::route('/'),
            'create' => Pages\CreateBidrequest::route('/create'),
            'edit' => Pages\EditBidrequest::route('/{record}/edit'),
        ];
    }
}
