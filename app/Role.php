<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read Collection<Ability> $abilities
 */
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
