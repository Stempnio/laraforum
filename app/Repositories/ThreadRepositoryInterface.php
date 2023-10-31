<?php

namespace App\Repositories;

use App\Models\Thread;
use Illuminate\Support\Collection;

interface ThreadRepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): ?Thread;

    public function create(string $title, int $userId): void;
}
