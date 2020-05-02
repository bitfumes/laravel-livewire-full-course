<?php

namespace App\Http\Livewire;

use App\SupportTicket;
use Livewire\Component;

class Tickets extends Component
{
    public $active ;

    protected $listeners = ['ticketSelected'];

    public function ticketSelected($ticketId)
    {
        $this->active = $ticketId;
    }

    public function render()
    {
        return view('livewire.tickets', [
            'tickets' => SupportTicket::all(),
        ]);
    }
}
