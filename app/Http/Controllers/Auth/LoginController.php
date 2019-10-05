<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void

     */
    

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'username' => ['required'],
    //         'password' => ['required']
    //     ],);
    // }
    // protected function CheckCreditentials($request)
    // {
        
    //     $credentials = [
    //         'username' => $request['username'],
    //         'password' => $request['password'],
    //     ];  
    //     if (Auth::attempt($credentials)) {
    //         return redirect('home');
    //     }
    //     echo "123"; 
    //          return redirect('register')->withErrors("error");
    // }

    // public function login(){
    //     $Validator = $this->Validator(request(['username','password']));
        
    //     if($Validator->fails()){
    //          return redirect('login')->withErrors($Validator);
    //     }

    //    $this->CheckCreditentials(request(['username','password']));
    //     // auth()->login($user)
    //     // return redirect()->to('/profile');
    // }

}
