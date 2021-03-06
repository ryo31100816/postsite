<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Comment;

class Testcomponent extends Component
{
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.testcomponent');
    }

    public function getComment($id)
    {
        return Comment::find($id);
    }
}
