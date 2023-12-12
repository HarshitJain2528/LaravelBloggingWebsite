<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

  <title>Blog Homepage</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/userstyle.css')}}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    /* Default styles */
    /* ... */

    /* Dark mode styles */
    body.dark-mode. {
        background-color: #1f1f1f;
        color: #ffffff;
        /* Add more dark mode styles */
    }
    .dark-mode-card {
        background-color: #333;
        color: #fff;
        box-shadow: 0px -1px 16px rgba(255, 102, 153, 0.8); /* Pinkish red shadow */

      }
      /* Dark mode styles for the entire categories section */
      .dark-mode .category-section {
          background-color: #1f1f1f; 
          color: #fff; 
      }

    .dark-mode .dark-mode-input {
        background-color: #333; /* Dark background color */
        color: #fff; /* Text color in dark mode */
        /* Additional styles for dark mode input fields */
    }



</style>
</head>
<body class="{{ auth()->check() && auth()->user()->dark_mode ? 'dark-mode' : '' }}">
