<?php

    namespace App\Observers;

    use App\Models\Post;

    class PostObserver
    {

        public function creating(Post $post): void
        {
            $post->excerpt = substr($post->body, 0, 150);
        }

    }
