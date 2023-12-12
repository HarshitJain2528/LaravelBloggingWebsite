<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        background-color: #333; /* Dark background color for dark mode */
        color: #fff; /* Text color for dark mode */
        /* Add any other styles you want for the dark mode card */
        /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08), inset 0 0 20px rgba(255, 255, 255, 0.1); Example gradient box-shadow for dark mode */
        box-shadow:
        0 4px 6px rgba(0, 0, 0, 0.1),
        0 1px 3px rgba(0, 0, 0, 0.08),
        inset 0 0 20px rgba(255, 255, 255, 0.1),
        inset 0 20px 20px -20px #ff4d4d, /* Lighter shade of red - adjust as needed */
        inset 0 -20px 20px -20px #cc0000;
      }
</style>
</head>
<body class="{{ auth()->check() && auth()->user()->dark_mode ? 'dark-mode' : '' }}">
