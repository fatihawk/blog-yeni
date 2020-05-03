<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
Use App\Comment;
Use App\Category;

class Post extends Model
{
    // /**
     /* The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat_id','title', 'content', 'image',
    ];
    public function Category()
    {
        return $this->hasOne(Category::class,'id','cat_id');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    

}
