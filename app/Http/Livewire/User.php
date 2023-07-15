<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Users;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;

    // public $users;

    public function render()
    {
        // return <<<'blade'
        //     <div>
        //         <h1>This is user component </h1>
        //     </div>
        // blade;

        $users = Users::paginate(10);

        return view('livewire.user', ['users' => $users]);
    }

    public function edit($id)
    {
        $this->user = Users::find($id);
    }
}
