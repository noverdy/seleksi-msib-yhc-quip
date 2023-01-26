<x-template title="Login">
    <div class="my-5">
        <h1 class="fw-bold">Login</h1>
        <h5>Login untuk mengakses fungsi-fungsi sistem pengelolaan data mahasiswa.</h5>
    </div>
    <div class="my-4">
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <x-floating-input label="Username" name="username" />
            <x-floating-input type="password" label="Password" name="password" />

            <button type="submit" class="btn btn-primary text-white">Login</button>
        </form>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            {{ $errors->first() }}
        </div>
    @endif
</x-template>
