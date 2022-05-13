<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUp extends Component
{
    public $email = '';
    public $first_name = '';
    public $last_name = '';
    public $password = '';
    public $passwordConfirmation = '';

    public function updatedEmail(){
        $this->validate(['email' => 'unique:users']);
    }

    public function register(){
        // dd($this->getUserLocation());
        $data = $this->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30'
        ]);

        $user = User::create([
            'email' => $data['email'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'password' => Hash::make($data['password']),
        ]);
        auth()->login($user);
        $user->assignRole('seeder');
        return redirect('/dashboard');
    }

    public function getUserLocation()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://www.iplocate.io/api/lookup/'.request()->ip().'',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $result = json_decode($response);
        return $result;


    }

    public function render()
    {
        return view('livewire.auth.sign-up');
    }
}
