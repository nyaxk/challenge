<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Scout\Searchable;

class Accounts extends Model
{
    use Searchable;

    protected $primaryKey = "id";
    protected $fillable = ['id', 'agency', 'number', 'digit', 'corporateName', 'fantasyName', 'cnpj', 'type'];
    protected $hidden = ['users_id', 'id'];

    /**
     * Scout search
     * @return string
     */
    public function searchableAs(): string
    {
        return 'accounts';
    }

    /**
     * Fetch specific accounts
     * @param $id
     * @return Collection
     */
    public static function getAccountByID($id): Collection
    {
        return self::with(['user', 'transactions'])->where('id', $id)->get(['id', 'users_id', 'agency', 'number', 'digit', 'corporateName', 'fantasyName', 'cnpj', 'type']);
    }

    /**
     * Fetch all accounts
     * @return Collection
     */
    public static function getAllAccounts(): Collection
    {
        return self::get(['id', 'users_id', 'agency', 'number', 'digit', 'corporateName', 'fantasyName', 'cnpj', 'type']);
    }

    /**
     * Get user
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'users_id', 'id');
    }

    /**
     * Get account transactions
     * @return HasMany
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(Transactions::class);
    }
}
