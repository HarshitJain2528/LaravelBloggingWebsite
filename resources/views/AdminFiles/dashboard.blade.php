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
                        @if($userActivities->isEmpty())
                            <p class="card-text">No recent user activities found.</p>
                        @else
                            <ul>
                                @foreach($userActivities as $activity)
                                    <li>
                                        User {{ $activity->user->name }} {{ $activity->action }} - {{ $activity->description }}
                                        <small>{{ $activity->created_at }}</small>
                                    </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </div>
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Users-Posts Relationship</h5>
                        <canvas id="usersPostsChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Site Statistics</h5>
                        <canvas id="siteStatisticsChart" width="400" height="310"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('siteStatisticsChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($categoryLabels) !!},
                datasets: [{
                    label: 'Number of Posts per Category',
                    data: {!! json_encode($postsPerCategory) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var userPostsCtx = document.getElementById('usersPostsChart').getContext('2d');
        var userPostsData = {!! json_encode($userPostsData) !!};
        var userPostsLabels = Object.keys(userPostsData);
        var userPostsValues = Object.values(userPostsData);

        var usersPostsChart = new Chart(userPostsCtx, {
            type: 'bar',
            data: {
                labels: userPostsLabels,
                datasets: [{
                    label: 'Number of Posts by User',
                    data: userPostsValues,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection