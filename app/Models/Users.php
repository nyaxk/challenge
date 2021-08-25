<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Scout\Searchable;

class Users extends Model
{
    use Searchable;

    protected $primaryKey = "id";

    /**
     * Laravel scout search
     * @return string
     */
    public function searchableAs(): string
    {
        return 'name';
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
