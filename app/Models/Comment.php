<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded=[];
    public function post()
    {
        // Defines a belongsTo relationship with the Post model,
        // indicating that this comment is associated with a specific post.
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        // Defines a belongsTo relationship with the User model,
        // linking the comment to the user who created it.
        return $this->belongsTo(User::class);
    }

    public function responses()
    {
        // Establishes a one-to-many relationship with the CommentResponse model,
        // allowing retrieval of all responses associated with this comment.
        return $this->hasMany(CommentResponse::class);
    }

    public function vote($type)
    {
        // Allows users to vote on the comment. If $type is 'up', increments the upvotes count,
        // otherwise, if $type is 'down', increments the downvotes count.
        if ($type === 'up') {
            $this->increment('upvotes');
        } elseif ($type === 'down') {
            $this->increment('downvotes');
        }
    }

}
