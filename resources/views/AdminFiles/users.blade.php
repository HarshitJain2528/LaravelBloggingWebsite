@extends('AdminFiles.layouts.main')

@section('admin-users-section')
    @include('AdminFiles.layouts.navbar')

    <div class="container dashboard-content">
        <div class="users-section">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h2>All Users</h2>
            <ul class="list-group">
                @foreach ($users as $user)
                    <li class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{$user->name}}</h5>
                        </div>
                        <p class="mb-1">Email: {{$user->email}}</p>
                        <div class="user-actions">
                            <a href="{{route('user.delete', $user->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <hr>

        <!-- Pagination Links inside a div -->
        <div class="pagination-links">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
