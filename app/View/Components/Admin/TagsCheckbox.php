<?php

namespace App\View\Components\Admin;

use App\Models\Tag;
use Illuminate\View\Component;

class TagsCheckbox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.tags-checkbox',[
            'tags' => Tag::all()
        ]);
    }
}
