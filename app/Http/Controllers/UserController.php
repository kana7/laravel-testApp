<?php

namespace BeginingLaravel\Http\Controllers;

use Illuminate\Http\Request;

use BeginingLaravel\User;

class UserController extends Controller
{
    
    public function __construct(){
        // $this->middleware('auth');
    }

    public function index(){
        return 'hello laravel controllers';
    }

    public function read(){
        $users = User::all();

        foreach($users as $user){
            echo $user->name . PHP_EOL;
        }
    }

    public function create(){
        $user = New User;
        $user->name = 'Hiren Dave';
        $user->email = 'hiren@dave.com';
        $user->password = 'hiren';
        $user->save();
        echo 'New User is Created';
    }

    public function update($id){
        $user = User::find($id);
        $user->name = "Hiren J. Dave";
        $user->save();
        echo 'User is Updated';
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        echo 'User is deleted';
    }
}
