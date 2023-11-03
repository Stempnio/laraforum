<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepositoryInterface;
use App\Repositories\ThreadRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    private ThreadRepositoryInterface $threadRepository;
    private PostRepositoryInterface $postRepository;

    public function __construct(
        ThreadRepositoryInterface $threadRepository,
        PostRepositoryInterface $postRepository
    ) {
        $this->threadRepository = $threadRepository;
        $this->postRepository = $postRepository;
    }

    public function index(int $threadId)
    {
        $thread = $this->threadRepository->getById($threadId);

        if (!$thread) {
            abort(404);
        }

        $posts = $this->postRepository->getPostsByThread(
            threadId: $thread->id,
            perPage: 7
        );

        return view('thread.index')
            ->with('posts', $posts)
            ->with('threadId', $threadId);
    }

    public function store(Request $request): RedirectResponse
    {
        $formFields = $request->validate([
            'title' => 'required|max:255|min:4'
        ]);

        $title = $formFields['title'];
        $userId = $request->user()->id;

        $this->threadRepository->create(title: $title, userId: $userId);

        return redirect()
            ->route('home')
            ->with('threadAddSuccess', 'Thread created successfully!');
    }

    public function create()
    {
        return view('thread.create');
    }
}
