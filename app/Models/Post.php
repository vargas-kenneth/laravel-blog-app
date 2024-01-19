<?php

namespace App\Models;

use App\Models\User;
use App\Models\PostImage;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'post_id';

    protected $guarded = [];

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

    public function imageFullPath(): Attribute
    {
        return Attribute::make(
            get: fn () => optional($this->postImage)->image_path . optional($this->postImage)->image_name,
        );
    }

    public function timePosted(): Attribute
    {
        $timePosted = $this->updated_at->diffForHumans();

        if ($this->updated_at->diffInHours(Carbon::now()) > 24) {
            $carbonDate = Carbon::parse($this->updated_at);
            $timePosted = $carbonDate->format('F j, Y g:i A');
        }

        return Attribute::make(
            get: fn() => $timePosted,
        );
    }
}
