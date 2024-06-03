<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SiswaResource\Pages;
use App\Models\Siswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\DB;

class SiswaResource extends Resource
{
    protected static ?string $model = Siswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function DataGeter()
    {
        $dataUser = DB::table('users')->select('id', 'name')->get()->mapWithKeys(function ($item) {
            return [$item->id => $item->name];
        });
        $jenpendidikan = array('SD','SMP','SMA/SMK','Perguruan Tinggi','Umum');
        // $datasiswa=DB::table('siswas')->select('user_id')->get()->mapWithKeys(function ($item) {
        //     return [$item->id => $item->user_id];
        // });

        $data=[
            'dataUser'=>$dataUser,
            'jenpendidikan'=>$jenpendidikan
        ];


        return $data;
    }

    public static function form(Form $form): Form
    {
        $data=self::DataGeter();
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')->options($data['dataUser']),
                Forms\Components\Select::make('jenjang_pendidikan')->options($data['jenpendidikan']),
                Forms\Components\FileUpload::make('profile')->image(),
            ]);
    }

    // public static function table(Table $table): Table
    // {

    //     return $table
    //         ->columns([
    //             Tables\Columns\TextColumn::make('profile')->searchable(),
    //             // Tabel menampilkan nama user berdasarkan user_id
    //             Tables\Columns\TextColumn::make('user_id')->searchable()->format(
    //                 function ($value) { // ini adalah closure function yang akan dijalankan untuk setiap baris data, ibaratnya kayak inline css
    //                     $user = DB::table('users')->where('id', $value)->first();
    //                  return $user->name;
    //                 }
    //             ),
    //             Tables\Columns\TextColumn::make('jenjang_pendidikan')->searchable(),
    //         ])
    //         ->filters([

    //         ])
    //         ->actions([
    //             Tables\Actions\EditAction::make(),
    //         ])
    //         ->bulkActions([
    //             Tables\Actions\BulkActionGroup::make([
    //                 Tables\Actions\DeleteBulkAction::make(),
    //             ]),
    //         ]);
    // }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('profile')->searchable(),
            Tables\Columns\TextColumn::make('user_id')->searchable()->format(
                function ($value) {
                    $user = DB::table('users')->where('id', $value)->first();
                    return $user ? $user->name : 'Unknown User';
                }
            ),

            Tables\Columns\TextColumn::make('jenjang_pendidikan')->searchable(),
        ])
        ->filters([
            // Add any filters here if necessary
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
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
