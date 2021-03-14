<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $table;
    public $utilizator;
    public $email;
    public $rol;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($utilizator,$email,$rol)
    {
        $this->utilizator = $utilizator;
        $this->email = $email;
        $this->rol = $rol;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.table');
    }
}
