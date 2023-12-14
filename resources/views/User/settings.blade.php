@extends('User.layouts.main')

@section('user-settings-section')
    @include('User.layouts.navbar')
    <section class="container my-5">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h2 class="text-center mb-4">Settings</h2>
        <form action="{{ route('settings.update') }}" method="POST">
            @csrf
            <div class="card p-4 shadow-sm settingsCard" >
                <h3>Dark Mode</h3>
                <hr>
                <!-- Dark Mode Toggle -->
                <label class="switch mb-3">
                    <input type="checkbox" id="darkModeToggle" name="darkModeToggle" {{ optional($user)->dark_mode ? 'checked' : '' }}>
                    <span class="slider round"></span>
                </label>
                <button class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </section>
    <style>
        .footer{
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position:fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

@endsection
