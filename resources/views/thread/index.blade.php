<x-layout>
    @foreach ($posts as $post)
        <div class="card p-1 m-2 {{ $loop->iteration % 2 === 0 ? 'bg-light' : '' }}">
            <h6>{{ $post->user->email }}</h6>
            {{ $post->content }}
            <span class="mt-1 text-secondary">{{ $post->created_at }}</span>
        </div>
    @endforeach

    <x-bottom-pagination>
        {{ $posts->links() }}
    </x-bottom-pagination>
</x-layout>
