<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AnnouncementBadge extends Component
{

    public $href = "#";
    public $title = "New";
    public $subject = "";
    
    public function render()
    {
        return view('livewire.announcement-badge');
    }
}
