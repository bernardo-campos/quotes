<?php

namespace App\Http\Livewire\Guest;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Author;

class AuthorTable extends DataTableComponent
{
    protected $model = Author::class;
    public bool $showPerPage = false;
    public array $perPageAccepted = [8];

    public function configure(): void
    {
        $this->setPrimaryKey('slug');
        $this->setTableAttributes([
            'default' => false,
            'class' => 'authors-main',
        ]);
        $this->setTableWrapperAttributes([
            'class' => 'overflow-y-hidden',
        ]);
    }

    public function columns(): array
    {
        return [
            Column::make(__('attributes.slug'), 'slug')
                ->hideIf(true),
            Column::make(__('attributes.image'), 'image')
                ->hideIf(true),
            Column::make(__('attributes.name'), 'name')
                ->sortable()
                ->searchable()
                ->format(function ($value, $row, Column $column) {
                    return view('livewire-tables.rows.author-table', compact('row', 'column'));
                }),
            Column::make(__('attributes.description'), 'description')
                ->searchable()
                ->hideIf(true),
        ];
    }
}
