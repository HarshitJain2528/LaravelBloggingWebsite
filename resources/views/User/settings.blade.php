@extends('User.layouts.main')

@section('user-settings-section')
@include('User.layouts.navbar')
<section class="container my-5">
    <h2 class="text-center mb-4">Settings</h2>
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card p-4 shadow-sm">
          <h3>Dark Mode</h3>
          <hr>
          <label class="switch mb-3">
            <input type="checkbox" id="darkModeToggle">
            <span class="slider round"></span>
          </label>
          <h3>Email Notifications</h3>
        <hr>
        <label for="emailToggle" class="form-check-label mb-3">
          <input type="checkbox" id="emailToggle">
          Receive Email Notifications
        </label>

        <h3>Privacy</h3>
        <hr>
        <div class="form-check mb-3">
          <input class="form-check-input" type="radio" name="privacyOptions" id="public" checked>
          <label class="form-check-label" for="public">
            Public Profile
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="radio" name="privacyOptions" id="private">
          <label class="form-check-label" for="private">
            Private Profile
          </label>
        </div>
          <button class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </section>

  <script>
    const darkModeToggle = document.getElementById('darkModeToggle');
    const darkModeLabel = document.getElementById('darkModeLabel');
    const emailToggle = document.getElementById('emailToggle');
    
    darkModeToggle.addEventListener('change', () => {
      if (darkModeToggle.checked) {
        darkModeLabel.innerText = 'Dark Mode';
      } else {
        darkModeLabel.innerText = 'Light Mode';
      }
    });
    
    emailToggle.addEventListener('change', () => {
      // Handle email notification toggle
    });
    </script>
@endsection