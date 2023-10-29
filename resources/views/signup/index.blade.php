<x-centered-layout>
    <x-auth-card>
        <form method="post" action="/signup" class="d-flex flex-column align-items-center">
            @csrf
            <div class="form-floating mb-2">
                <input class="form-control form-control-lg" id="nameInput" placeholder="John Kowalsky" name="name"
                    value="{{ old('name') }}">
                <label for="nameInput">Name</label>
            </div>
            <div class="form-floating mb-2">
                <input type="email" class="form-control form-control-lg" id="emailInput"
                    placeholder="name@example.com" name="email" value="{{ old('email') }}">
                <label for="emailInput">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control form-control-lg" id="passwordInput" placeholder="Password"
                    name="password">
                <label for="passwordInput">Password</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control form-control-lg" id="passwordConfirmInput"
                    placeholder="Confirm Password" name="password_confirmation">
                <label for="passwordConfirmInput">Confirm Password</label>
            </div>
            <button class="btn btn-lg btn-primary w-75 m-4" type="submit">Sign up</button>
            <p class="m-0">Already have an account?</p>
        </form>
        <a class="btn btn-lg m-0" href="/login" role="button">Sign in</a>
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
    </x-auth-card>
    </x-layout>
