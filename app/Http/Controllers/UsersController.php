<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private function getAllUsers(){
        return Users::all();
    }

    private function getAllUsersQuery($query){
        //dd(Users::where("name", "LIKE", "%Nyaxk%")->get());
        return Users::search($query)->get();
    }

    public function index(Request $request){
        if($request->input('q'))
            return $this->getAllUsersQuery($request->input('q'));
        else
            return $this->getAllUsers();
    }
}
