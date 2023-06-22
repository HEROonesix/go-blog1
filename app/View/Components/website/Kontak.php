<?php

namespace App\View\Components\website;

use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Kontak extends Component
{
    /**
     * Create a new component instance.
     */
    public $no_hp, $email, $alamat;
    public function __construct()
    {
        $this->no_hp = Setting::where('key','no_hp')->first()->value;
        $this->email = Setting::where('key','email')->first()->value;
        $this->alamat = Setting::where('key','alamat')->first()->value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.kontak');
    }
}
