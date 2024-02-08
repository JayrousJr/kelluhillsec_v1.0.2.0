<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PopulationResource\Pages;
use App\Filament\Resources\PopulationResource\RelationManagers;
use App\Models\Population;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PopulationResource extends Resource
{
    protected static ?string $model = Population::class;

    protected static ?string $navigationGroup = 'System Management';
    protected static ?string $navigationIcon = 'heroicon-s-user-group';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('students')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('teachers')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nonTeachers')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('levels')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('students')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teachers')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nonTeachers')
                    ->searchable(),
                Tables\Columns\TextColumn::make('levels')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
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
            'index' => Pages\ListPopulations::route('/'),
            'create' => Pages\CreatePopulation::route('/create'),
            'view' => Pages\ViewPopulation::route('/{record}'),
            'edit' => Pages\EditPopulation::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
