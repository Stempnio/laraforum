<?php

namespace App\Repositories;

use App\Models\Thread;
use Illuminate\Support\Collection;

interface ThreadRepositoryInterface
{
    public function get(?int $perPage = null, ?array $filters = null);

    public function getById(int $id): ?Thread;

    public function create(string $title, int $userId): void;
}
