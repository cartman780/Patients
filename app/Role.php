<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = ['id'];

    public function users()
    {
        return $this->BelongsToMany(User::class);
    }
}
