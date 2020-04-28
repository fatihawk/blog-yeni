<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
Use App\Comment;

class Post extends Model
{
    // /**
     /* The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'image',
    ];
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    

}
