<?php

namespace App\Filament\Resources\ResultResource\Pages;

use App\Filament\Resources\ResultResource;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables;
use Illuminate\Validation\Rules\Unique;
use Filament\Forms\Components\Select;
use Illuminate\Support\Str;
use Filament\Forms\Get;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class CreateResult extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected static string $resource = ResultResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    use CreateRecord\Concerns\HasWizard;

    protected function getSteps(): array
    {

        return [
            Step::make('Upload Result')
                ->columns(3)
                ->icon('heroicon-o-briefcase')
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
                                Select::make('year')
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
                                TextInput::make('examName')
                                    ->label('Exam Type')
                                    ->readOnly()
                                    ->default('NECTA')
                                    ->maxLength(255),
                                TextInput::make('divOne')
                                    ->numeric()
                                    ->required()
                                    ->label('Division One')
                                    ->maxLength(255),
                                TextInput::make('divTwo')
                                    ->numeric()
                                    ->required()
                                    ->label('Division Two')
                                    ->maxLength(255),
                                TextInput::make('divThree')
                                    ->numeric()
                                    ->required()
                                    ->label('Division Three')
                                    ->maxLength(255),
                                TextInput::make('divFour')
                                    ->numeric()
                                    ->required()
                                    ->label('Division Four')
                                    ->maxLength(255),
                                TextInput::make('divZero')
                                    ->required()
                                    ->numeric()
                                    ->label('Division Zero')
                                    ->maxLength(255),
                                TextInput::make('link')
                                    ->required()
                                    ->default('#')
                                    ->prefix('https://')
                                    ->suffix('.com')
                                    ->url()
                                    ->suffixIcon('heroicon-m-globe-alt')
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                                FileUpload::make('pdf')
                                    ->columnSpanFull()
                                    ->label('Results PDF Document')
                                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                        $fileName = Str::random(9);
                                        $name = explode('.', $fileName);
                                        return (string) str('pdf/result-' . $name[0] . '.pdf');
                                    }),
                            ],
                            'continuous' => [
                                Select::make('year')
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
                                Select::make('examName')
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
                                TextInput::make('divOne')
                                    ->numeric()
                                    ->required()
                                    ->label('Division One / Grade A')
                                    ->maxLength(255),
                                TextInput::make('divTwo')
                                    ->numeric()
                                    ->required()
                                    ->label('Division Two / Grade B')
                                    ->maxLength(255),
                                TextInput::make('divThree')
                                    ->numeric()
                                    ->required()
                                    ->label('Division Three / Grade C')
                                    ->maxLength(255),
                                TextInput::make('divFour')
                                    ->numeric()
                                    ->required()
                                    ->label('Division Four / Grade D')
                                    ->maxLength(255),
                                TextInput::make('divZero')
                                    ->numeric()
                                    ->required()
                                    ->label('Division Zero / Grade F')
                                    ->maxLength(255),
                                FileUpload::make('pdf')
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
                ])
        ];
    }
}