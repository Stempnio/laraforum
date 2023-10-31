<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface PostRepositoryInterface
{
    public function create(int $threadId, int $userId, string $content);
}
