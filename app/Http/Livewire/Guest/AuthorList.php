<?php

namespace App\Http\Livewire\Guest;

use App\Models\Author;
use Livewire\Component;

class AuthorList extends Component
{
    public $title, $type, $yearColumn, $date;
    private $column, $authors;

    protected $listeners = [
        'dateUpdated' => 'updateDate'
    ];

    private function initializeColumns()
    {
        if ($this->type == 'births') {
            $this->column = 'dob';
            $this->yearColumn = 'yob';
        } else {
            $this->column = 'dod';
            $this->yearColumn = 'yod';
        }
    }

    public function updateDate($date)
    {
        $this->date = substr($date, -5);
        $this->initializeColumns();
    }

    public function mount($title, $type)
    {
        $this->title = $title;
        $this->type = $type;
        $this->date = date('m-d');
        $this->initializeColumns();
    }

    public function render()
    {
        $this->authors = Author::where($this->column, 'like', "%-{$this->date}")->orderByDesc($this->column)->get();

        return view('livewire.guest.author-list', [
            'authors' => $this->authors
        ]);
    }
}
