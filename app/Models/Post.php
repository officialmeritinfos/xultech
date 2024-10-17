<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    /**
     * Define the relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Check if the post allows comments.
     */
    public function allowsComments()
    {
        return $this->allow_comments;
    }

    /**
     * Format the post content with markdown for code blocks.
     */
    public function formattedContent()
    {
        // Check if content contains HTML tags
        if ($this->isHtml($this->content)) {
            return $this->content; // Return HTML as is
        } else {
            return \Illuminate\Support\Str::markdown($this->content); // Parse as Markdown
        }
    }

    /**
     * Determine if the content is HTML.
     */
    private function isHtml($content)
    {
        return $content !== strip_tags($content);
    }


    /**
     * Check if a user can edit or delete the post.
     */
    public function canEdit($user)
    {
        return $user->role === 'superadmin' || $user->role === 'admin' || $user->role === 'editor';
    }

    /**
     * Increment the view count for the post.
     */
    public function incrementViews()
    {
        $this->increment('views');
    }

    public function comments()
    {
        // Defines a one-to-many relationship with the Comment model,
        // allowing retrieval of all comments associated with this post.
        return $this->hasMany(Comment::class);
    }

    public function vote($type)
    {
        // Allows users to vote on the post. If $type is 'up', increments the upvotes count,
        // otherwise, if $type is 'down', increments the downvotes count.
        if ($type === 'up') {
            $this->increment('upvotes');
        } elseif ($type === 'down') {
            $this->increment('downvotes');
        }
    }

}
