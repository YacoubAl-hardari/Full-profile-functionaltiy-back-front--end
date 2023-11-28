<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HomePage;

class ShowHomePage extends Component
{
    public function render()
    {
        $showDataHomePage = HomePage::orderBy('id','DESC')->first() ;
    
        return view('livewire.show-home-page',['showDataHomePage'=> $showDataHomePage]);
    }
}
