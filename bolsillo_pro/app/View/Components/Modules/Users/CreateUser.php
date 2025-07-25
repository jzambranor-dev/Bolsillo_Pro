<?php

namespace App\View\Components\Modules\Users;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CreateUser extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modules.users.create-user');
    }
}
