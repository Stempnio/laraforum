<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{

    private PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function store(Request $request, $threadId)
    {
        $validated = $request->validate([
            'postContent' => 'required|max:400'
        ]);

        $userId = $request->user()->id;
        $postContent = $validated['postContent'];


        $this->postRepository->create(
            threadId: $threadId,
            userId: $userId,
            content: $postContent
        );

        return redirect()->route('thread', ['id' => $threadId]);
    }
}
