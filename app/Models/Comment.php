<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['timestamp'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nested_comments()
    {
        return $this->hasMany(NestedComment::class);
    }

    public function getTimestampAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
