<?php

namespace App\View\Components\website;

use App\Models\Galeri as ModelsGaleri;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Galeri extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;
    public function __construct()
    {
        $this->data = ModelsGaleri::orderBy('id','DESC')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.galeri',[
            'data'=>$this->data,
        ]);
    }
}
