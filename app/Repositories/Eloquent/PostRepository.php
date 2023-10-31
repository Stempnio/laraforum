<?php

namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Repositories\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function create(int $threadId, int $userId, string $content): void
    {
        Post::create([
            'thread_id' => $threadId,
            'user_id' => $userId,
            'content' => $content,
        ]);
    }
}
