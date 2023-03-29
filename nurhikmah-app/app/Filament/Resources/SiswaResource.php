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
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;


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
                Tables\Columns\ImageColumn::make('kartuKeluarga')->disk('images'),
                Tables\Columns\ImageColumn::make('akte')->disk('images'),
                Tables\Columns\ImageColumn::make('buktiPembayaran')->disk('images')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('nomorOrtu'),
                Tables\Columns\TextColumn::make('namaOrtu'),
                Tables\Columns\ImageColumn::make('kartuKeluarga')->disk('images'),
                Tables\Columns\ImageColumn::make('akte')->disk('images'),
                Tables\Columns\ImageColumn::make('buktiPembayaran')->disk('images'),
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
            'edit' => Pages\EditSiswa::route('/{record}/edit'),
        ];
    }    

    public static function canCreate(): bool
    {
       return false;
    }
    
}
