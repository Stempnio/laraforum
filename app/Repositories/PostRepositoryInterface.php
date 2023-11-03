<?php

namespace App\Repositories;

interface PostRepositoryInterface
{
    public function getPostsByThread($threadId, $perPage = null);
    public function create(
        int $threadId,
        int $userId,
        string $content
    );
}
