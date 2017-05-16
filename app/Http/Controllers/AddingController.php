<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Cashier;
use App\Teacher;
use App\Librarian;

class AddingController extends Controller
{
    public function registerUser(Request $request){
        $user = $this->create($request->all());
    }
    protected function create(array $data)
    {

        $user = User::create([
            'username' => $data['username'],
            'type' => $data['type'],
            'password' => bcrypt($data['password']),
        ]);
        if($data['type']=="admin"){
            Admin::create([
                'name' => $data['name'],
                'user_id' => $user->id,
            ]);
        }elseif ($data['type']=="cahier") {
            Cashier::create([
                'user_id' => $user->id,
                'name' => $data['name'],
                ]);
        }elseif ($data['type']=="librarian") {
            Librarian::create([
                'user_id' => $user->id,
                'name' => $data['name'],
                ]);
        }elseif ($data['type']=="teacher") {
            Teacher::create([
                'user_id' => $user->id,
                'firstname' => $data['firstname'],
                'middlename' => $data['middlename'],
                'lastname' => $data['lastname'],
                'position' => $data['position'],
                'contact' => $data['contact'],
                'address' => $data['address'],
                'email' => $data['email'],
                ]);
        }
        return $user;
    }
}
