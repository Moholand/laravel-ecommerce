<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;
    
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $new_image;
    public $slider_id;
    
    public function mount($slide_id)
    {
        $slider = HomeSlider::find($slide_id);

        $this->title = $slider->title;
        $this->subtitle = $slider->subtitle;
        $this->price = $slider->price;
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;
    }

    public function updateSlide()
    {
        $slider = HomeSlider::find($this->slider_id);

        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;

        if($this->new_image) {
            $imageName = Carbon::now()->timestamp . '.' . $this->new_image->extension(); 
            $this->new_image->storeAs('sliders', $imageName);
            $slider->image = $imageName;
        }
        
        $slider->status = $this->status;

        $slider->save();
        session()->flash('successMessage', 'اسلاید با موفقیت ویرایش شد');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.base');
    }
}
