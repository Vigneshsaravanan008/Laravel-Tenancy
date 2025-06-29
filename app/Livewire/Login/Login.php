<?php

namespace App\Livewire\Login;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email,$password;

    protected $rules = [
        'email'=>'required|email',
        'password'=>'required|min:8'
    ];

    protected $message =[
        'email.email'=>'Enter the Valid Email Address',
        'password'=>'Enter the password'
    ];

    public function updated($value)
    {
        $this->validateOnly($value);
    }

    public function loginForm()
    {
        $this->validate();
        if(Auth::attempt(['email'=>$this->email, 'password'=>$this->password]))
        {
            return redirect()->route('web.dashboard');
        }else{
            if(User::where('email',$this->email)->exists())
            {
                $this->dispatch('checkPassword',message: 'Password is Incorrect',parameter:'Password');
                return true;
            }else{
                $this->dispatch('checkPassword',message: 'Email is Incorrect',parameter:'Email');
                return true;
            }
        }
    }

    public function mount()
    {
        if(Auth::check())
        {
            return redirect()->route('web.dashboard');
        }
    }

    public function render()
    {
        return view('livewire.login.login')->extends('web.layouts.master')->section('content');
    }

}
