<?php

namespace App\Livewire;

use Livewire\Component;

class ShowServicesPage extends Component
{
    public function render()
    {
        $beanners = [];
        return view('livewire.show-services-page',['beanners'=>$beanners]);
    }
}
