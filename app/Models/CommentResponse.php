<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentResponse extends Model
{
    protected $guarded =[];

    public function comment()
    {
        // Defines a belongsTo relationship with the Comment model, indicating
        // that this response is associated with a specific comment.
        return $this->belongsTo(Comment::class);
    }

    public function user()
    {
        // Establishes a belongsTo relationship with the User model,
        // linking the response to the user who created it.
        return $this->belongsTo(User::class);
    }

    public function parentResponse()
    {
        // Defines a self-referencing belongsTo relationship with the CommentResponse model,
        // where response_to_id references the ID of another CommentResponse, allowing for nested replies.
        return $this->belongsTo(CommentResponse::class, 'response_to_id');
    }

    public function responses()
    {
        // Sets up a self-referencing hasMany relationship, retrieving all responses
        // associated with this response. Useful for showing threaded replies.
        return $this->hasMany(CommentResponse::class, 'response_to_id');
    }

    public function vote($type)
    {
        // Enables voting on the response. If $type is 'up', increments the upvotes count,
        // otherwise, if $type is 'down', increments the downvotes count.
        if ($type === 'up') {
            $this->increment('upvotes');
        } elseif ($type === 'down') {
            $this->increment('downvotes');
        }
    }

}
