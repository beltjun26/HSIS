<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Cashier;
use App\Teacher;
use App\Librarian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var stripcslashes(str)ng
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function registerUser(Request $request){
        $user = $this->create($request->all());
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if($data['type'] == 'admin'){
            return Validator::make($data, [
                'username' => 'required|string|max:255',
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                // 'bdate' => 'date|string|max:255',
                'password' => 'required|string|min:6|confirmed',
                'type' => 'required|string|max:10',
                ]);
        }elseif($data['type']=='cashier'){
            return Validator::make($data, [
                // 'username' => 'required|string|max:255',
                // 'firstname' => 'required|string|max:255',
                // 'lastname' => 'required|string|max:255',
                // 'password' => 'required|string|min:6|confirmed',
                // 'type' => 'required|string|max:10',
            ]);
        }elseif($data['type']=='librarian'){
            return Validator::make($data, [
                'username' => 'required|string|max:255',
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'password' => 'required|string|min:6|confirmed',
                'type' => 'required|string|max:10',
            ]);
        }elseif($data['type']=='teacher'){
            return Validator::make($data, [
                'username' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'password' => 'required|string|min:6|confirmed',
                'type' => 'required|string|max:10',
                'position' => 'required|string|max:30',
                'address' => 'required|string|max:100',
                'email' => 'required|string|max:100',
            ]);
        }
        //this still need modification
        // return Validator::make($data, [
        //     'username' => 'required|string|max:255',
        //     // 'type' => 'required|string|max:255',
        //     'password' => 'required|string|min:6|confirmed',
        // ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $user = User::create([
            'username' => $data['username'],
            'type' => $data['type'],
            'password' => bcrypt($data['password']),
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'bdate' => $data['bdate'],
            'gender' => $data['gender'],
        ]);
        if($data['type']=="admin"){
            Admin::create([
                'user_id' => $user->id,
            ]);
        }elseif ($data['type']=="cahier") {
            Cashier::create([
                'user_id' => $user->id,
                ]);
        }elseif ($data['type']=="librarian") {
            Librarian::create([
                'user_id' => $user->id,
                ]);
        }elseif ($data['type']=="teacher") {
            Teacher::create([
                'user_id' => $user->id,
                'position' => $data['position'],
                'contact' => $data['contact'],
                'address' => $data['address'],
                'email' => $data['email'],
                ]);
        }
        return $user;
    }
}
