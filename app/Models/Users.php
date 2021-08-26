<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Users extends Model
{
    use Searchable;

    protected $primaryKey = "id";
    protected $fillable = ['name', 'email', 'email', 'cpf', 'phoneNumber'];
    protected $hidden = ['password','id'];

    /**
     * Scout search
     * @return string
     */
    public function searchableAs(): string
    {
        return 'usersIndex';
    }

    /**
     * Scout search by fields
     * @return array
     */
    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        $array['cpf'] = false; // Disable search using CPF
        $array['phoneNumber'] = false; // Disable search using Phone number
        $array['email'] = false; // Disable search using Email

        return $array;
    }


    /**
     * Fetch specific users
     * @param $query
     * @return Collection
     */
    public static function getAllUsersQuery($query): Collection
    {
        return self::search($query)->get()->load(['accounts', 'transactions']);
    }

    /**
     * Fetch all users
     * @return Collection
     */
    public static function getAllUsers(): Collection
    {
        return self::get();
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
}
