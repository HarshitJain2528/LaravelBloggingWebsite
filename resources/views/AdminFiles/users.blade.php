@extends('AdminFiles.layouts.main')

@section('admin-users-section')
    @include('AdminFiles.layouts.navbar')

    <div class="container dashboard-content">
        <div class="users-section">
            <h2>All Users</h2>
            <ul class="list-group">
                <!-- Sample Users (Replace with actual data) -->
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">User 1</h5>
                    </div>
                    <p class="mb-1">Email: user1@example.com</p>
                    <div class="user-actions">
                        <button class="btn btn-sm btn-primary">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">User 2</h5>
                    </div>
                    <p class="mb-1">Email: user2@example.com</p>
                    <div class="user-actions">
                        <button class="btn btn-sm btn-primary">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </div>
                </li>
                <!-- ... Add more users ... -->
            </ul>
        </div>

        <div class="users-section">
            <h2>Add New User</h2>
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <!-- Add more fields for roles, permissions, etc. as needed -->
                <button type="submit" class="btn btn-primary">Create User</button>
            </form>
        </div>
    </div>
@endsection
