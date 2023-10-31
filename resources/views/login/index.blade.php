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
            <x-alert type="danger">
                @foreach ($errors->all() as $error)
                    <p>
                        {{ $error }}
                    </p>
                @endforeach
            </x-alert>
        @endif
        @if (session('success'))
            <x-alert type="success">
                <p>
                    {{ session('success') }}
                </p>
            </x-alert>
        @endif
    </x-auth-card>
</x-centered-layout>
