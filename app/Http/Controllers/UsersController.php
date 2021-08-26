<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Get all users
     * @param Request $request
     * @return Collection
     */
    public function index(Request $request): Collection
    {
        return Users::getAllUsers();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return false
     */
    public function create(): bool
    {
        return false;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return false
     */
    public function store(Request $request): bool
    {
        return false;
    }

    /**
     * Get all users by Name
     * @param $name
     * @return Collection
     */
    public function show($name): Collection
    {
        return Users::getAllUsersQuery($name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return false
     */
    public function edit($id): bool
    {
        return false;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return false
     */
    public function update(Request $request, $id): bool
    {
        return false;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return false
     */
    public function destroy($id): bool
    {
        return false;
    }
}
