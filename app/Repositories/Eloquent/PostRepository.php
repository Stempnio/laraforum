<?php

namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Models\Thread;
use App\Repositories\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function getPostsByThread($threadId, $perPage = null)
    {
        $query = Post::query();

        $query = $query->where('thread_id', $threadId);

        $query = $query->orderByDesc('updated_at');

        return $perPage ? $query->paginate($perPage) : $query->get();
    }
    public function create(int $threadId, int $userId, string $content): void
    {
        $post = Post::create([
            'thread_id' => $threadId,
            'user_id' => $userId,
            'content' => $content,
        ]);

        if ($post) {
            $thread = Thread::find($threadId);
            $thread->touch();
        }
    }
}
