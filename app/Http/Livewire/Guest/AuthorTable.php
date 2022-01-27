<?php

namespace App\Http\Livewire\Guest;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Author;

class AuthorTable extends DataTableComponent
{

    public bool $showPerPage = false;
    public array $perPageAccepted = [8];

    public function columns(): array
    {
        return [
            Column::make(__('attributes.name'), 'name')
                ->sortable()
                ->searchable(),
            Column::make(__('attributes.description'), 'description')
                ->searchable()
                ->hideIf(true),
        ];
    }

    public function query(): Builder
    {
        return Author::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.author-table';
    }

    public function setTableClass(): ?string
    {
        return 'authors-main';
    }
}
