<?php

namespace App\Repositories;

interface PostRepositoryInterface
{
    public function create(int $threadId, int $userId, string $content);
}
