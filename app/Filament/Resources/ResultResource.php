<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResultResource\Pages;
use App\Filament\Resources\ResultResource\RelationManagers;
use App\Models\Result;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Illuminate\Validation\Rules\Unique;
use Closure;
use Filament\Tables\Table;
use Filament\Forms\Components\Fieldset;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ResultResource extends Resource
{
    protected static ?string $model = Result::class;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Results';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('formId')
                    ->live()
                    ->required()
                    ->searchDebounce(500)
                    ->preload()
                    ->label('Class Level')
                    ->loadingMessage('Loading Levels...')
                    ->options([
                        'Form One' => 'Form One',
                        'Form Two' => 'Form Two',
                        'Form Three' => 'Form Three',
                        'Form Four' => 'Form Four',
                    ])
                    ->searchable(),
                Select::make('examType')
                    // ->live(debounce: 100)
                    ->preload()
                    ->required()
                    ->live(debounce: 100)
                    ->searchDebounce(500)
                    ->afterStateUpdated(fn (Select $component) => $component
                        ->getContainer()
                        ->getComponent('nectaFields')
                        ->getChildComponentContainer()
                        ->fill())
                    ->loadingMessage('Loading Examination Types...')
                    ->searchable()
                    ->options(fn (Get $get): array => match ($get('formId')) {
                        'Form One' => [
                            'continuous' => 'Continuous Assessments',
                        ],
                        'Form Two' => [
                            'necta' => 'NECTA',
                            'continuous' => 'Continuous Assessments',
                        ],
                        'Form Three' => [
                            'continuous' => 'Continuous Assessments',
                        ],
                        'Form Four' => [
                            'necta' => 'NECTA',
                            'continuous' => 'Continuous Assessments',
                        ],
                        default => [],
                    }),

                Grid::make(3)
                    ->schema(fn (Get $get): array => match ($get('examType')) {
                        'necta' => [
                            Forms\Components\Select::make('year')
                                ->searchable()
                                ->unique(
                                    modifyRuleUsing: function (Unique $rule, callable $get) {
                                        return $rule
                                            ->where('examName', $get('examName'))
                                            ->where('year', $get('year'))
                                            ->where('formId', $get('formId'));
                                    },
                                    ignoreRecord: true
                                )
                                ->validationMessages([
                                    'unique' => 'NECTA results for this Class in this :attribute are Published already'
                                ])
                                ->options([
                                    '2020' => '2020', '2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024', '2025' => '2025', '2026' => '2026', '2027' => '2027', '2028' => '2028', '2029' => '2029', '2030' => '2030', '2031' => '2031', '2032' => '2032', '2033' => '2033', '2040' => '2034', '2035' => '2035', '2036' => '2036', '2037' => '2037', '2038' => '2038', '2039' => '2039', '2040' => '2040',
                                ]),
                            Forms\Components\TextInput::make('examName')
                                ->label('Exam Type')
                                ->readOnly()
                                ->default('NECTA')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('divOne')
                                ->numeric()
                                ->required()
                                ->label('Division One')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('divTwo')
                                ->numeric()
                                ->required()
                                ->label('Division Two')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('divThree')
                                ->numeric()
                                ->required()
                                ->label('Division Three')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('divFour')
                                ->numeric()
                                ->required()
                                ->label('Division Four')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('divZero')
                                ->required()
                                ->numeric()
                                ->label('Division Zero')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('link')
                                ->required()
                                ->default('#')
                                ->prefix('https://')
                                ->suffix('.com')
                                ->url()
                                ->suffixIcon('heroicon-m-globe-alt')
                                ->maxLength(255)
                                ->columnSpanFull(),
                            Forms\Components\FileUpload::make('pdf')
                                ->columnSpanFull()
                                ->label('Results PDF Document')
                                ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                    $fileName = $file->hashName();
                                    $name = explode('.', $fileName);
                                    return (string) str('/assets/pdf/' . $name[0] . '.pdf');
                                }),
                        ],
                        'continuous' => [
                            Forms\Components\Select::make('year')
                                ->searchable()
                                ->unique(
                                    modifyRuleUsing: function (Unique $rule, callable $get) {
                                        return $rule
                                            ->where('examName', $get('examName'))
                                            ->where('year', $get('year'))
                                            ->where('formId', $get('formId'));
                                    },
                                    ignoreRecord: true
                                )
                                ->validationMessages([
                                    'unique' => 'In this :attribute, Results of this Class and Examination Type are Published already'
                                ])
                                ->options([
                                    '2020' => '2020', '2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024', '2025' => '2025', '2026' => '2026', '2027' => '2027', '2028' => '2028', '2029' => '2029', '2030' => '2030', '2031' => '2031', '2032' => '2032', '2033' => '2033', '2040' => '2034', '2035' => '2035', '2036' => '2036', '2037' => '2037', '2038' => '2038', '2039' => '2039', '2040' => '2040',
                                ]),
                            Forms\Components\Select::make('examName')
                                ->searchable()
                                ->preload()
                                ->searchDebounce(500)
                                ->required()
                                ->options(fn (Get $get): array => match ($get('formId')) {
                                    'Form One' => [
                                        'Mid-Term Examination' => 'Mid-Term Examination',
                                        'Terminal Examination' => 'Terminal Examination',
                                        'Annual Examination' => 'Annual Examination',
                                    ],
                                    'Form Two' => [
                                        'Mid-Term Examination' => 'Mid-Term Examination',
                                        'Terminal Examination' => 'Terminal Examination',
                                        'MOCK TAHOSSA' => 'MOCK TAHOSSA',
                                        'MOCK OHONGSS' => 'MOCK OHONGSS',
                                        'MOCK CLUSTER' => 'MOCK CLUSTER',

                                    ],
                                    'Form Three' => [
                                        'Mid-Term Examination' => 'Mid-Term Examination',
                                        'Terminal Examination' => 'Terminal Examination',
                                        'Annual Examination' => 'Annual Examination',
                                    ],
                                    'Form Four' => [
                                        'Mid-Term Examination' => 'Mid-Term Examination',
                                        'Terminal Examination' => 'Terminal Examination',
                                        'MOCK TAHOSSA' => 'MOCK TAHOSSA',
                                        'MOCK OHONGSS' => 'MOCK OHONGSS',
                                        'MOCK CLUSTER' => 'MOCK CLUSTER',
                                    ],
                                    default => [],
                                }),
                            Forms\Components\TextInput::make('divOne')
                                ->numeric()
                                ->required()
                                ->label('Division One / Grade A')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('divTwo')
                                ->numeric()
                                ->required()
                                ->label('Division Two / Grade B')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('divThree')
                                ->numeric()
                                ->required()
                                ->label('Division Three / Grade C')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('divFour')
                                ->numeric()
                                ->required()
                                ->label('Division Four / Grade D')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('divZero')
                                ->numeric()
                                ->required()
                                ->label('Division Zero / Grade F')
                                ->maxLength(255),
                            Forms\Components\FileUpload::make('pdf')
                                ->columnSpanFull()
                                ->label('Results PDF Document')
                                ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                    $fileName = $file->hashName();
                                    $name = explode('.', $fileName);
                                    return (string) str('/assets/pdf/' . $name[0] . '.pdf');
                                }),
                        ],
                        default => [],
                    })
                    ->key('nectaFields'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('formId')
                    ->color(function (string $state) {
                        if ($state == 'Form Two')
                            return 'blue';
                        if ($state == 'Form One') {
                            return 'primary';
                        }
                        if ($state == 'Form Three') {
                            return 'yellow';
                        }
                        if ($state == 'Form Four') {
                            return 'red';
                        }
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->label('Sitting Year')
                    ->searchable(),
                Tables\Columns\TextColumn::make('examName')
                    ->label('Eamination Name')
                    ->searchable(),
                Tables\Columns\IconColumn::make('Approved')
                    ->default(1)
                    ->boolean(),
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
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListResults::route('/'),
            'create' => Pages\CreateResult::route('/create'),
            'view' => Pages\ViewResult::route('/{record}'),
            'edit' => Pages\EditResult::route('/{record}/edit'),
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
