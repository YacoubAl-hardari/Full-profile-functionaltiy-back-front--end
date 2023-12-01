<?php

namespace App\Livewire;

use App\Models\AboutUSPage;
use Livewire\Component;

class ShowAboutPage extends Component
{
    public function render()
    {
        $aboutUs = AboutUSPage::orderBy('id','DESC')->first();
        return view('livewire.show-about-page',['aboutUs'=>$aboutUs]);
    }
}
