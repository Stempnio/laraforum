<x-layout>
    <div class="row d-flex justify-content-center">
        <div class="col col-md-8 col-lg-6">
            <div class="input-group mb-2">
                <input type="search" class="form-control " placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary">search</button>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($threads as $thread)
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('thread', $thread->id) }}" class="text-decoration-none">
                    <div class="card shadow border-0 p-3 m-2">
                        <p class="fs-5 fw-bold text-start">{{ $thread->title }}</p>
                        Number of posts: {{ $thread->posts->count() }}
                        <span class="text-secondary fst-italic">
                            Updated {{ $thread->updated_at->diffForHumans() }}
                        </span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <x-bottom-pagination>
        {{ $threads->links() }}
    </x-bottom-pagination>

</x-layout>
