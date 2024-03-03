<?php

namespace App\Http\Livewire\Guest;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Quote;

class QuoteTable extends DataTableComponent
{

    public ?int $searchFilterDebounce = 500;
    public string $searchTerm = "";

    /* TODO: extract to a helper or a trait */
    public function createPattern($str)
    {
        $replaces = [
            'a|à|á|A|À|Á' => '(a|à|á|A|À|Á)',
            'e|è|é|E|È|É' => '(e|è|é|E|È|É)',
            'i|ì|í|I|Ì|Í' => '(i|ì|í|I|Ì|Í)',
            'o|ò|ó|O|Ò|Ó' => '(o|ò|ó|O|Ò|Ó)',
            'u|ù|ú|U|Ù|Ú' => '(u|ù|ú|U|Ù|Ú)',
        ];
        foreach ($replaces as $key => $value) {
            $str = preg_replace("/$key/", "$value", $str);
        }
        return $str;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

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
                        $this->searchTerm = $searchTerm;
                        $query->orWhereRaw("MATCH (quote) AGAINST (?)", [$searchTerm]);
                    }
                )
                ->format(function($value) {
                    if ($this->searchTerm) {
                        $pattern = $this->createPattern($this->searchTerm);
                        return preg_replace("/($pattern)/i", '<mark>$1</mark>', $value);
                    }
                    return $value;
                })
                ->html(),
        ];
    }

    public function setTableClass(): ?string
    {
        return "table table-sm";
    }

    public function builder(): Builder
    {
        return Quote::with('author');
    }
}
