<?php

namespace App\Models;

use App\Models\User;
use App\Models\PostImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'post_id';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function postImage(): HasOne
    {
        return $this->hasOne(PostImage::class, 'post_id', 'post_id');
    }

    public function tag(): HasOne
    {
        return $this->hasOne(Tag::class, 'post_id');
    }
}
