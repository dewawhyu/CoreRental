<?php

namespace App\Http\Livewire\Admin\Member;

use Livewire\Component;
use App\Models\Member;

class MemberCreate extends Component
{
    public function render()
    {
        $data_member = Member::latest()->get();
        return view('livewire.admin.member.member-create',[
            'members' => $data_member,
        ]);
    }
}
