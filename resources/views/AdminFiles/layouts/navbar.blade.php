<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid justify-content-end">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('admin/dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/posts')}}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/comments')}}">Comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/users')}}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/add-category')}}">Add Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin-logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>