<?php

namespace App\View\Components\Admin;

use App\Models\Category;
use Illuminate\View\Component;

class CategoriesCheckbox extends Component
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
        return view(
            'components.admin.categories-checkbox',
            ['parent_categories' => Category::where('is_parent', 1)->with('childs')->get()]
        );
    }
}
