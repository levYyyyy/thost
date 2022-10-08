<?php

namespace App\Models;

use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = ['content', 'video_id', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function video() {
        return $this->belongsTo(Video::class);
    }
}
