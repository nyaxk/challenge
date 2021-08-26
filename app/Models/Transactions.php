<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['value', 'type'];
    protected $hidden = ['users_id', 'accounts_id'];
}
