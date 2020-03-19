<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $guarded = ['id']; 

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }

    public static function getTypes(){
        return ['back' => 'Rug', 'arms' => 'Armen', 'legs' => 'Benen', 'ass' => 'Kont'];
    }
}
// ['back', 'arms', 'legs', 'ass']; <------- Dit geeft wel de score weer bij de patient