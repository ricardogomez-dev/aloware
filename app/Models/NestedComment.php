<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NestedComment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['timestamp'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTimestampAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
