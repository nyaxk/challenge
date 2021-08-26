<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Scout\Searchable;

class Users extends Model
{
    use Searchable;

    protected $primaryKey = "id";
    protected $fillable = ['id', 'name', 'email', 'email', 'cpf', 'phoneNumber'];
    protected $hidden = ['password', 'id'];

    /**
     * Scout search
     * @return string
     */
    public function searchableAs(): string
    {
        return 'usersIndex';
    }

    /**
     * Fetch specific users
     * @param $query
     * @return Collection
     */
    public static function getAllUsersQuery($query): Collection
    {
        return self::search($query)->get(['name', 'cpf', 'phoneNumber', 'email'])->load(['accounts', 'transactions']);
    }

    /**
     * Fetch all users
     * @return Collection
     */
    public static function getAllUsers(): Collection
    {
        return self::get(['name', 'cpf', 'phoneNumber', 'email']);
    }

    /**
     * Get all accounts of user
     * @return HasMany
     */
    public function accounts(): HasMany
    {
        return $this->hasMany(Accounts::class);
    }

    /**
     * Get user transactions
     * @return HasMany
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(Transactions::class);
    }

    /**
     * Get a personal user account, if any.
     * @return HasOne
     */
    public function getPersonalAccount(): HasOne
    {
        return $this->hasOne(Accounts::class)->where('type', 'person');
    }

    /**
     * Get a company account, if any.
     * @return HasOne
     */
    public function getCompanyAccount(): HasOne
    {
        return $this->hasOne(Accounts::class)->where('type', 'company');
    }
}
