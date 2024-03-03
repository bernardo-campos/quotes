<?php

namespace App\Http\Livewire\Admin;

use App\Models\Author;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class AuthorTable extends DataTableComponent
{
    protected $model = Author::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setTableAttributes([
            'default' => false,
            'class' => 'table table-sm table-hover',
        ]);
    }

    public function columns(): array
    {
        return [
            Column::make('id')
                ->sortable(),
            // Column::make(__('Info')),
            Column::make(__('Name'), 'name')
                ->sortable()
                ->searchable(),
            // Column::make(__('Age')), // cam't display calculated attribute
            Column::make(__('Description'), 'description')
                ->searchable(),
            Column::make(__('Popularity'), 'popularity')
                ->sortable(),
            Column::make(__('Button'), 'image')
                ->view('admin.authors.livewire.button'),
            Column::make('bio')->hideIf(true),
            Column::make('description')->hideIf(true),
            Column::make('abstract')->hideIf(true),
        ];
    }
}
