<?php

namespace Nadaft\ContactMe\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMe extends Model
{
    protected $fillable = [
        'name', 'email', 'message'
    ];
}
