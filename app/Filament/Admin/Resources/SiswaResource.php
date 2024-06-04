<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Siswa;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\DB;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Admin\Resources\SiswaResource\Pages;

class SiswaResource extends Resource
{
    protected static ?string $model = Siswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $label = 'List Siswa';

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
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('profile')->searchable(),
                // image show
                ImageColumn::make('profile')->circular(),
                TextColumn::make('user_id')->formatStateUsing(
                    function ($record) {
                        $user = DB::table('users')->where('id', $record->user_id)->first();
                        return $user ? $user->name : '';
                    }
                ),
                TextColumn::make('jenjang_pendidikan')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
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
