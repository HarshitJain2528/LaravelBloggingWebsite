@extends('layouts.main')

@section('admin-login-section')
    <div class="header">
        <h2>Blogging Admin Panel</h2>
    </div>

    <div class="container">
        <div class="login-container">
            <h3 class="text-center mb-4">Login</h3>
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-3">Login</button>
            </form>
        </div>
    </div>
@endsection