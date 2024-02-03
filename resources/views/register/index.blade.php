@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-register w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                <form method="post">
                    @csrf

                    <div class="form-floating ">
                        <input type="text" class="form-control rounded-top @error('name') is-invalid  @enderror"
                            name="name" id="name" placeholder="Name" required value="{{old('name')}}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid  @enderror" name="username"
                            id="Username" placeholder="Username" required value="{{old('username')}}">
                        <label for="Username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email"
                            id="floatingInput" placeholder="name@example.com" required value="{{old('email')}}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid  @enderror rounded-bottom"
                            id="floatingPassword" placeholder="Password" required> 
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register now</button>
                </form>

                <small class="text-center d-block mt-3">Already have an account? <a href="/login">Login now!</a></small>
            </main>
        </div>
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
