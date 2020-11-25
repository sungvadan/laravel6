<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function abilities()
    {
        return $this->belongsToMany(Ability::class);
    }

    public function allowTo(Ability $ability)
    {
        $this->abilities()->sync($ability, false);
    }
}
