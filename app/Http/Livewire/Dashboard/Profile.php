<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Profile extends Component
{

    public $first_name = '';
    public $last_name = '';
    public $email = '';

    public $old_password = '';
    public $password = '';
    public $password_confirmation = '';

    public function mount()
    {
        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
        $this->email = auth()->user()->email;
    }

    public function save(){
        $profileData = $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);
        auth()->user()->update($profileData);
    }

    public function changePassword() {
        $this->validate([
            'old_password' => 'required|max:255',
            'password' => 'required|max:255|confirmed|min:6',
        ]);

            if(Hash::check(auth()->user()->password, $this->old_password)){
                if($this->password == $this->password_confirmation){
                   auth()->user()->update(['password' => Hash::make($this->password)]);
                   session()->flash('success','Password updated successfully.');
                    return back();
                }else{
                    session()->flash('error','Passwords don`t match');
                    return back();
                }     
            }else{
                session()->flash('error','Incorrect Old Password');
                return back();
            }
        
              
          }

    public function render()
    {
        return view('livewire.dashboard.profile');
    }
}
