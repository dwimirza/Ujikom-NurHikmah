<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiswaResource\Pages;
use App\Filament\Resources\SiswaResource\RelationManagers;
use App\Models\Siswa;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiswaResource extends Resource
{
    protected static ?string $model = Siswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomorOrtu')
                    ->required(),
                Forms\Components\TextInput::make('namaOrtu')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kartuKeluarga')
                    ->maxLength(255),
                Forms\Components\TextInput::make('akte')
                    ->maxLength(255),
                Forms\Components\TextInput::make('buktiPembayaran')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('nomorOrtu'),
                Tables\Columns\TextColumn::make('namaOrtu'),
                Tables\Columns\ImageColumn::make('kartuKeluarga')
                    ->label('kartuKeluarga')
                    ->image(function ($value, $record) {
                    return $record->kartuKeluarga 
                    ? '/path/to/images/' . $record->kartuKeluarga
                    : '/path/to/default/image.jpg';
    })
,
                Tables\Columns\TextColumn::make('akte'),
                Tables\Columns\TextColumn::make('buktiPembayaran'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
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
