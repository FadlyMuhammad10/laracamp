<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\User\AfterRegister;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function login(){
        return view('auth.user.login');
    }

    public function google(){
        return Socialite::driver('google')->redirect();
    }

    public function handleprovidercallback(){
        $callback= Socialite::driver('google')->stateless()->user(); // dari documentation laravel socialite
        $data=[
            'name'=>$callback->getName(),
            'email'=>$callback->getEmail(),
            'avatar'=>$callback->getAvatar(),
            'email_verified_at'=>date('Y-m-d H:i:s',time())
        ];

        //$user= User::firstOrCreate(['email'=>$data['email']], $data);//jika ketemu email yang sama tidak perlu nambah email jika ketemu sama maka nambah email
        $user = User::whereEmail($data['email'])->first();
        if (!$user) {
            $user = User::create($data);
            Mail::to($user->email)->send(new AfterRegister($user));
        }
        Auth::login($user, true);

        return redirect(route('welcome'));
    }
}
