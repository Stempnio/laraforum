<?php
namespace App\Repositories;
use Illuminate\Support\Collection;

interface ThreadRepositoryInterface
{
    public function getAll(): Collection;

    public function create(string $title, int $userId): void;
}
