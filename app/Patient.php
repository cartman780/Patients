<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = ['id'];

    public function treatments()
    {
        return $this->hasMany(Treatment::class)->orderBy('created_at', 'DESC');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
