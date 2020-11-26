<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read Collection<Article> $articles
 */
class Tag extends Model
{
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
