<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'id', 'name', 'description'
    ];

    protected $hidden = [
        'updated_at', 'created_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps()->orderBy('name');
    }
}
