<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Quote;

class QuoteTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('id')
                ->sortable()
                ->searchable(),
            Column::make(__('Author'), 'author.name')
                ->sortable()
                ->searchable(),
            Column::make(__('Quote'), 'quote')
                ->sortable()
                ->searchable(),
        ];
    }

    public function setTableClass(): ?string
    {
        return "table table-sm";
    }

    public function query(): Builder
    {
        return Quote::query();
    }
}
