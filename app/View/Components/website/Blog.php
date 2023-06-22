<?php

namespace App\View\Components\website;

use App\Models\Blog as ModelsBlog;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Blog extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;

    public function __construct()
    {
        $this->data = ModelsBlog::orderBy('tanggal','DESC')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.blog',[
            'data'=>$this->data,
        ]);
    }
}
