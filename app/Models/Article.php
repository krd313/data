<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'description', 'status', 'user_id', 'scategory_id'
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

        /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

        /**
     * @return BelongsTo
     */
    public function scategory(): BelongsTo
    {
        return $this->belongsTo(Scategory::class);
    }


        /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

}
