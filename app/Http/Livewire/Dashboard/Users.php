<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Users extends Component
{
    public function render()
    {
        $users = User::latest()->paginate(9);
        return view('livewire.dashboard.users',['users' => $users]);
    }

    public function getLastActivity($user_id)
    {
        $last_activity = DB::table('sessions')->where('user_id',$user_id)->first();
        return $last_activity;
    }
}
