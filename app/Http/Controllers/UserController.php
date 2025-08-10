<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        // for ($i = 0; $i < 10; $i++) {
        //     $data['name'] = 'ujjal.001' . $i;
        //     $data['email'] = 'ujjal' . $i . '@example.com';
        //     $data['password'] = '123456789';
        //     User::create($data);
        // }
        $users = User::all();
        
        return view('hello', compact('users'));
    }
}
