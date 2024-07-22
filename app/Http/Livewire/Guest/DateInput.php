<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;
use Carbon\Carbon;

class DateInput extends Component
{
    public string $date;
    public Carbon $carbonDate;

    public function mount()
    {
        $this->carbonDate = Carbon::today();
        $this->date = $this->carbonDate->format('Y-m-d');
    }

    public function updatedDate($value)
    {
        $this->carbonDate = Carbon::parse($value);
        $this->date = $this->carbonDate->format('Y-m-d');

        $this->emit('dateUpdated', $this->date);
    }

    public function render()
    {
        return view('livewire.guest.date-input');
    }
}
