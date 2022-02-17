<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GroupListItem extends Component
{
    public $userType;
    public $name;
    public $description;
    public $code;
    public $isActive;
    public $id;

    public function __construct($userType="", $name="", $description="", $code="", $isActive="", $id="")
    {
        $this->userType = $userType;
        $this->name = $name;
        $this->description = $description;
        $this->code = $code;
        $this->isActive = $isActive;
        $this->id = $id;
    }

    public function render()
    {
        return view('components.group-list-item');
    }
}
