<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputText extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $type, public string $placeholder)
    {
        //
    }
    
    public const TYPES = ['text','checkbox','submit'];
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if(in_array($this->type , self::TYPES)) {
            return view('components.input-text');
        }

        return "";
    }
}
