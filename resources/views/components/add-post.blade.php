@error('postContent')
    <x-alert type="danger">
        {{ $message }}
    </x-alert>
@enderror

<form method="POST" action="{{ route('createPost', ['id' => $threadId]) }}">
    @csrf
    <div class="form-floating">
        <textarea name="postContent" class="form-control mb-2" id="postContentInput" required>{{ old('postContent') }}</textarea>
        <label for="postContentInput">Post content</label>
    </div>
    <button class="btn btn-outline-primary" type="submit">Submit</button>
</form>
