<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hero extends Component
{

    public $title;
    public $description;
    /**
     * @param string $title
     * @param string $description
     */
    public function __construct($title = 'Default Title', $description = 'Default Description')
    {
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     * @return \Illuminate\View\View|string
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
