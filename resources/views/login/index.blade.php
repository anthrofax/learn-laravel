@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please log in</h1>

                {{-- Tampilkan pesan saat pengguna berhasil mendaftarkan akunnya --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- Tampilkan pesan jika login gagal --}}
                @if (session()->has('onError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('onError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="post">
                    @csrf

                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
                </form>

                <small class="text-center d-block mt-3">Not registered? <a href="/register">Register now!</a></small>
            </main>
        </div>
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
