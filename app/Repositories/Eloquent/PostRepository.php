<?php
namespace App\Repositories\Eloquent;
use App\Models\Post;
use App\Repositories\PostRepositoryInterface;
use Illuminate\Support\Collection;

class PostRepository implements PostRepositoryInterface
{
    public function getThreadPosts(int $threadId): Collection
    {
        return Post::where('thread_id', $threadId)->get();
    }

    public function create(int $threadId, int $userId, string $content): void
    {
        Post::create([
            'thread_id' => $threadId,
            'user_id' => $userId,
            'content' => $content,
        ]);
    }
}
