<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Language;

class Head extends Component
{
    /**
     * Create a new component instance.
     */
    public $language;
    public $allLanguages;
    public function __construct($languageData)
    {
        $this->language = $languageData;
        $this->allLanguages = Language::where('iso_code', '!=', $this->language->iso_code)->get('iso_code');
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.head');
    }
}
