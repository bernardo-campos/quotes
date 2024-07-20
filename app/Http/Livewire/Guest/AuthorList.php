<?php

namespace App\Http\Livewire\Guest;

use App\Models\Author;
use Livewire\Component;

class AuthorList extends Component
{
    public $title, $type, $yearColumn;
    private $column, $authors;

    public function mount($title, $type)
    {
        $this->title = $title;

        if ($type == 'births') {
            $this->column = 'dob';
            $this->yearColumn = 'yob';
        } else {
            $this->column = 'dod';
            $this->yearColumn = 'yod';
        }

    }

    public function render()
    {
        $this->authors = Author::where($this->column, 'like', "%-" . date('m-d'))->orderByDesc($this->column)->get();

        return view('livewire.guest.author-list', [
            'authors' => $this->authors
        ]);
    }
}
