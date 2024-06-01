<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BidrequestResource\Pages;
use App\Models\Bidrequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BidrequestResource extends Resource
{
    protected static ?string $model = Bidrequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('siswa_id')->numeric(),
                Forms\Components\TextInput::make('guru_id')->numeric(),
                Forms\Components\Textarea::make('nama_mapel'),
                Forms\Components\Textarea::make('deskripsi_kebutuhan'),
                Forms\Components\DateTimePicker::make('jadwal'),
                Forms\Components\TextInput::make('harga_bider_terpilih')->numeric(),
                Forms\Components\Textarea::make('status'),
                Forms\Components\Textarea::make('review'),
                Forms\Components\Textarea::make('komentar_guru_ke_siswa'),
                Forms\Components\Textarea::make('komen_siswa_ke_guru'),
                Forms\Components\TextInput::make('komen_siswa_ke_guru')->numeric(),
                Forms\Components\TextInput::make('rating_siswa_ke_guru')->numeric(),
                Forms\Components\Textarea::make('taskpoinlain'),
                Forms\Components\Textarea::make('zoomlink'),
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
            'index' => Pages\ListBidrequests::route('/'),
            'create' => Pages\CreateBidrequest::route('/create'),
            'edit' => Pages\EditBidrequest::route('/{record}/edit'),
        ];
    }
}
