<?php

namespace App\Http\Livewire\Admin;

use App\Models\Author;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class AuthorTable extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('id')
                ->sortable(),
            Column::make(__('Info')),
            Column::make(__('Name'), 'name')
                ->sortable()
                ->searchable(),
            Column::make(__('Age')),
            Column::make(__('Description'), 'description')
                ->searchable(),
            Column::make(__('Popularity'), 'popularity')
                ->sortable(),
        ];
    }

    public function setTableClass(): ?string
    {
        return "table table-sm";
    }

    public function rowView(): string
    {
        return 'admin.authors.livewire.row';
    }

    public function query(): Builder
    {
        return Author::query();
    }
}
