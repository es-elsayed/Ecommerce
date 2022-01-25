<?php

namespace App\View\Components\Admin;

use App\Models\Brand;
use Illuminate\View\Component;

class BrandsDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $brandId;
    public function __construct($brandId = null)
    {
        $this->brandId = $brandId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.brands-dropdown', ['brands' => Brand::all()]);
    }
}
