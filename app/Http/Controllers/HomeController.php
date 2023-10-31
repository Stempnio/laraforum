<?php

namespace App\Http\Controllers;

use App\Repositories\ThreadRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private ThreadRepositoryInterface $threadRepository;

    public function __construct(ThreadRepositoryInterface $threadRepository)
    {
        $this->threadRepository = $threadRepository;
    }

    public function index(Request $request)
    {
        $threads = $this->threadRepository->getAll();

        return view('home.index')->with('threads', $threads);
    }
}
