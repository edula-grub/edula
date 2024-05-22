<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use App\Models\Guru;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Biderlist;
use App\Models\Bidrequest;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\DB;
use App\Filament\Admin\Resources\BiderlistResource\Pages;

class BiderlistResource extends Resource
{
    protected static ?string $model = Biderlist::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $listguru=DB::table('gurus')->join('users', 'users.id', '=', 'gurus.user_id')->select('gurus.*', 'users.name')->get()->pluck('name', 'id');
        $bidlist=Bidrequest::get()->pluck('id', 'nama_mapel');
        return $form
            ->schema([
                Forms\Components\Select::make('bidrequest_id')->options($bidlist),
                Forms\Components\Select::make('guru_id')->options($listguru),
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
            'index' => Pages\ListBiderlists::route('/'),
            'create' => Pages\CreateBiderlist::route('/create'),
            'edit' => Pages\EditBiderlist::route('/{record}/edit'),
        ];
    }
}
