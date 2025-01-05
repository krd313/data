<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Scategory extends Model
{
    /** @use HasFactory<\Database\Factories\ScategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'slug'
    ];

        /**
     * @return HasMany
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
