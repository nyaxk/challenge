<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Users;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use function Clue\StreamFilter\fun;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return Accounts::getAllAccounts();
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
     * Display the specified resource.
     *
     * @param int $id
     * @return Collection
     */
    public function show($id): Collection
    {
        return Accounts::getAccountByID($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
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
     * @param int $id
     * @return false
     */
    public function update(Request $request, $id): bool
    {
        return false;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return false
     */
    public function destroy($id): bool
    {
        return false;
    }
}
