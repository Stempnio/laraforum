<?php

namespace App\Repositories\Eloquent;

use App\Models\Thread;
use App\Repositories\ThreadRepositoryInterface;
use Illuminate\Support\Collection;

class ThreadRepository implements ThreadRepositoryInterface
{
    public function get($perPage = null, $filters = null)
    {
        $query = Thread::query();

        if ($filters) {
            $query = $query->filter($filters);
        }

        $query = $query->orderByDesc('created_at');

        return $perPage ? $query->paginate($perPage) : $query->get();
    }


    public function getById(int $id): ?Thread
    {
        return Thread::find($id);
    }

    public function create(string $title, int $userId): void
    {
        Thread::create([
            'title' => $title,
            'user_id' => $userId,
        ]);
    }
}
