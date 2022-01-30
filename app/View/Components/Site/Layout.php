<?php

namespace App\View\Components\Site;

use App\Models\Category;
use App\Models\Site;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view(
            'components.site.layout',
            [
                'siteInfo' => Site::selecting(),
                'main_categories' => Category::activeParent()->with('activeChilds')->get()
            ]
        );
    }
}
