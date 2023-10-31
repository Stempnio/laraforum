<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-dark">Logout</button>
</form>
