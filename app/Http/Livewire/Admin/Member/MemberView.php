<?php

namespace App\Http\Livewire\Admin\Member;

use Livewire\Component;
use App\Models\Member;
use Livewire\WithPagination;

class MemberView extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function render()
    {
        $data_member = Member::latest()->paginate(5);
        return view('livewire.admin.member.member-view',[
            'members' => $this->search === null ?
                Member::latest()->paginate(5) :
                Member::where('namadepan','like','%'. $this->search . '%')->orWhere('email','like','%'. $this->search . '%')->latest()->paginate(5)
            
        ]);
    }
}
