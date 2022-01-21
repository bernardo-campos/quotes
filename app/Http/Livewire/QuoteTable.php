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
                ->sortable(
                    function(Builder $query, $direction) {
                        return $query
                            ->leftJoin('authors','authors.id','=','quotes.author_id')
                            ->select('quotes.*', 'authors.name')
                            ->orderBy('authors.name', $direction);
                    }
                )
                ->searchable(),
            Column::make(__('Quote'), 'quote')
                ->sortable()
                ->searchable(
                    function (Builder $query, $searchTerm) {
                        $query->orWhereRaw("MATCH (quote) AGAINST (?)", [$searchTerm]);
                    }
                ),
        ];
    }

    public function setTableClass(): ?string
    {
        return "table table-sm";
    }

    public function query(): Builder
    {
        return Quote::with('author');
    }
}
