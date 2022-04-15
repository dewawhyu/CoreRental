<?php

namespace App\Http\Livewire\Admin\Member;

use Livewire\Component;

class MemberIndex extends Component 
{
    public $isAddMember = false;

    public function addMember(){
        $this->isAddMember = true;
    }

    public function backToViewData(){
        $this->isAddMember = false;
    }

    public function render()
    {
        return view('livewire.admin.member.member-index');
    }
}
