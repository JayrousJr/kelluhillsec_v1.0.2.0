<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use App\Models\Result;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class MockExaminationsresults extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 2;
    protected static bool $isLazy = false;
    protected static ?string $maxHeight = '250px';
    protected static ?string $heading = 'Mock Examination results';

    protected function getTableQuery(): Builder|Relation|null
    {
        return Result::latest()->where('examName', 'MOCK TAHOSSA')->where('examName', 'MOCK OHONGSS')->where('examName', 'MOCK CLUSTER');
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('formId')
                ->color(function (string $state) {
                    if ($state == 'Form Two')
                        return 'blue';
                    if ($state == 'Form Three') {
                        return 'primary';
                    }
                    if ($state == 'Form Three') {
                        return 'yellow';
                    }
                    if ($state == 'Form Four') {
                        return 'red';
                    }
                })
                ->label('Class Level'),
            Tables\Columns\TextColumn::make('year')
                ->label('Year'),
            Tables\Columns\TextColumn::make('examName')
                ->label('Exam Type'),
            Tables\Columns\TextColumn::make('divOne')
                ->label('Div One'),
            Tables\Columns\TextColumn::make('divTwo')
                ->label('Div Two'),
            Tables\Columns\TextColumn::make('divThree')
                ->label('Div Three'),
            Tables\Columns\TextColumn::make('divFour')
                ->label('Div Four'),
            Tables\Columns\TextColumn::make('divZero')
                ->label('Div Zero'),
        ];
    }
}
