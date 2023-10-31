<?php

namespace App\Http\Controllers;

use App\Repositories\ThreadRepositoryInterface;

class ThreadController extends Controller
{
    private ThreadRepositoryInterface $threadRepository;

    public function __construct(ThreadRepositoryInterface $threadRepository)
    {

        $this->threadRepository = $threadRepository;
    }

    public function index(int $threadId)
    {
        $thread = $this->threadRepository->getById($threadId);

        if (!$thread) {
            abort(404);
        }

        $posts = $thread->posts()->paginate(10);

        return view('thread.index')->with('posts', $posts);
    }
}
