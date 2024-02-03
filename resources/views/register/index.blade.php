@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-register w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                <form>
                    <div class="form-floating ">
                        <input type="text" class="form-control rounded-top" name="name" id="name" placeholder="Name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="Username" id="Username" placeholder="Username">
                        <label for="Username">Username</label>
                    </div>
                    
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register now</button>
                </form>

                <small class="text-center d-block mt-3">Already have an account? <a href="/login">Login now!</a></small>
            </main>
        </div>
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
