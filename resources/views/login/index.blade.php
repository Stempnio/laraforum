<x-centered-layout>
    <x-auth-card>
        <form method="post" action="/login" class="d-flex flex-column align-items-center">
            @csrf
            <div class="form-floating mb-2">
                <input type="email" class="form-control form-control-lg" id="emailInput" placeholder="name@example.com"
                    name="email" value="{{ old('email') }}">
                <label for="emailInput">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control form-control-lg" id="passwordInput" placeholder="Password"
                    name="password">
                <label for="passwordInput">Password</label>
            </div>
            <button class="btn btn-lg btn-primary w-75 m-4" type="submit">Sign in</button>
            <p class="m-0">Don't have an account yet?</p>
        </form>
        <a class="btn btn-lg m-0" href="/signup" role="button">Sign up</a>
        </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger m-3 alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                    <p>
                        {{ $error }}
                    </p>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success m-3 alert-dismissible fade show" role="alert">
                <p>
                    {{ session('success') }}
                </p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </x-auth-card>
</x-centered-layout>
