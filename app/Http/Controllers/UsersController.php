<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Fetch all users
     * @return Collection
     */
    private function getAllUsers(): Collection
    {
        return Users::all();
    }

    /**
     * Fetch specific users
     * @param $query
     * @return Collection
     */
    private function getAllUsersQuery($query): Collection
    {
        return Users::search($query)->get();
    }

    public function index(Request $request): Collection
    {
        if ($request->input('q'))
            return $this->getAllUsersQuery($request->input('q'));
        else
            return $this->getAllUsers();
    }
}
