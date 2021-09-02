<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Accounts extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ['id', 'agency', 'number', 'digit', 'corporateName', 'fantasyName', 'cnpj', 'type'];
    protected $hidden = ['users_id'];

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
