<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
class AdminHomeSliderComponent extends Component
{
    public function render()
    {
        $sliders=HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component',['sliders'=>$sliders])->layout('admin.dashboard');
    }
}
