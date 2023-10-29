<?php

namespace App\Repositories\Eloquent;
use App\Models\Thread;
use App\Repositories\ThreadRepositoryInterface;
use Illuminate\Support\Collection;

class ThreadRepository implements ThreadRepositoryInterface
{
    public function getAll(): Collection
    {
        return Thread::all();
    }

    public function create(string $title, int $userId): void
    {
        Thread::create([
            'title' => $title,
            'user_id' => $userId,
        ]);
    }
}