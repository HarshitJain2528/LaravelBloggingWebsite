@extends('AdminFiles.layouts.main')

@section('admin-login-section')
    <div class="header">
        <h2>Blogging Admin Panel</h2>
    </div>

    <div class="container">
        <div class="login-container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h3 class="text-center mb-4">Login</h3>
            <form action="{{route('admin.login')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                        <button class="btn" type="button" id="password-view"><i class="fas fa-eye-slash"></i></button>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-3">Login</button>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#password-view').on('click', function () {
                var passwordField = $('#password');
                var fieldType = passwordField.attr('type');
                if (fieldType === 'password') {
                    passwordField.attr('type', 'text');
                    $('#password-view i').removeClass('fa-eye-slash').addClass('fa-eye');
                } else {
                    passwordField.attr('type', 'password');
                    $('#password-view i').removeClass('fa-eye').addClass('fa-eye-slash');
                }
            });
        });

    </script>
@endsection