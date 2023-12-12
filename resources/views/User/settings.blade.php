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
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card p-4 shadow-sm">
                        <h3>Dark Mode</h3>
                        <hr>
                        <!-- Dark Mode Toggle -->
                        <label class="switch mb-3">
                            <input type="checkbox" id="darkModeToggle" name="darkModeToggle" {{ optional($user)->dark_mode ? 'checked' : '' }}>
                            <span class="slider round"></span>
                        </label>

                        <h3>Email Notifications</h3>
                        <hr>
                        <label for="emailToggle" class="form-check-label mb-3">
                            <input type="checkbox" id="emailToggle" name="emailToggle" {{ optional($user)->email_notifications ? 'checked' : '' }}>
                            Receive Email Notifications
                        </label>

                        <h3>Privacy</h3>
                        <hr>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="privacyOptions" id="public" {{ optional($user)->privacy === 'public' ? 'checked' : '' }}>
                            <label class="form-check-label" for="public">
                                Public Profile
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="privacyOptions" id="private" {{ optional($user)->privacy === 'private' ? 'checked' : '' }}>
                            <label class="form-check-label" for="private">
                                Private Profile
                            </label>
                        </div>
                        <button class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- JavaScript Section -->
    <script>
        // Function to enable dark mode
        function enableDarkMode() {
            document.body.classList.add('dark-mode');
            localStorage.setItem('darkMode', 'enabled');
        }

        // Function to disable dark mode
        function disableDarkMode() {
            document.body.classList.remove('dark-mode');
            localStorage.setItem('darkMode', 'disabled');
        }

        // Function to check user's preference on page load
        function checkDarkModePreference() {
            const darkModeSetting = localStorage.getItem('darkMode');
            if (darkModeSetting === 'enabled') {
                enableDarkMode();
            } else {
                disableDarkMode();
            }
        }

        // Event listener for dark mode toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        darkModeToggle.addEventListener('change', function () {
            if (darkModeToggle.checked) {
                enableDarkMode();
            } else {
                disableDarkMode();
            }
        });

        // Check user's dark mode preference on page load
        document.addEventListener('DOMContentLoaded', checkDarkModePreference);
    </script>
@endsection
