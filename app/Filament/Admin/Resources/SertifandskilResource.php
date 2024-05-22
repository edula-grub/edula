<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Sertifandskil;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\DB;
use App\Filament\Admin\Resources\SertifandskilResource\Pages;

class SertifandskilResource extends Resource
{
    protected static ?string $model = Sertifandskil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $guru=DB::table('gurus')->join('users', 'users.id', '=', 'gurus.user_id')->select('gurus.*', 'users.name')->get()->pluck('name', 'id');
        $status = [
            "pending","accepted","rejected"
        ];
        $rate = [
            "*","**","***","****","*****"
        ];
        $level = [
            "Expert","Intermediate","Beginner"
        ];
        return $form
            ->schema([
                Forms\Components\Select::make('guru_id')->options($guru)->label("Guru"),
                Forms\Components\FileUpload::make('sertifdoc')->label("Dokumen Sertifikat pdf/image only"),
                Forms\Components\Textarea::make('credensial'),
                Forms\Components\Select::make('level')->options($level)->label("Tingkat Skill"),
                Forms\Components\TextInput::make('skil'),
                Forms\Components\Select::make('approved')->options($status),
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
