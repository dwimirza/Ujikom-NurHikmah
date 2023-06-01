<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JawabanResource\Pages;
use App\Filament\Resources\JawabanResource\RelationManagers;
use App\Models\Jawaban;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JawabanResource extends Resource
{
    protected static ?string $model = Jawaban::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('student_id')
                    ->required(),
                Forms\Components\TextInput::make('question')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('answer')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('correct_answer')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('materi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('score')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student_id'),
                Tables\Columns\TextColumn::make('question'),
                Tables\Columns\TextColumn::make('answer'),
                Tables\Columns\TextColumn::make('correct_answer'),
                Tables\Columns\TextColumn::make('materi'),
                Tables\Columns\TextColumn::make('score'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListJawabans::route('/'),
            'create' => Pages\CreateJawaban::route('/create'),
            'edit' => Pages\EditJawaban::route('/{record}/edit'),
        ];
    }
}
