<x-layout>
    <div class="h2">Start a new thread</div>
    <div class="card p-3">
        <div class="card-content">
            <form method="POST" action="{{ route('storeThread') }}">
                @csrf
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Title</label>
                    <input type="title" name="title" class="form-control" id="inputTitle" aria-describedby="titleHelp"
                        value="{{ old('title') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col col-lg-6">
            @error('title')
                <x-alert type="danger">{{ $message }}</x-alert>
            @enderror
        </div>
    </div>

</x-layout>
