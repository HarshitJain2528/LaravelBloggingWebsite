@extends('AdminFiles.layouts.main')

@section('admin-dashboard-section')
    @include('AdminFiles.layouts.navbar')
    
    <div class="container dashboard-content">
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
        <div class="row">
            <div class="col-lg-4">
                <div class="card bg-primary text-white dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Posts</h5>
                        <p class="card-text">{{$totalPosts}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-success text-white dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Comments</h5>
                        <p class="card-text">{{$totalComments}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-warning text-dark dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">{{$totalUsers}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Activity</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Site Statistics</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection