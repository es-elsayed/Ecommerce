<?php

namespace App\View\Components\Site;

use App\Models\Site;
use Illuminate\View\Component;

class SocialLinks extends Component
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
            'components.site.social-links',
            [
                'siteInfo' => Site::selecting()
            ]
        );
    }
}
