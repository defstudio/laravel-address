<?php


namespace DefStudio\Address\View\Components;


use Illuminate\View\Component;

class Form extends Component
{
    public string $prefix;

    public function __construct(string $prefix = "address")
    {
        $this->prefix = $prefix;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('def-address::form');
    }
}
