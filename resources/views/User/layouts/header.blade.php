<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Homepage</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tiny.cloud/1/gifufoe73pitzv22cqx2nxkmc20ih1hhsr9ciupllngjym3b/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <link rel="stylesheet" href="{{asset('assets/userstyle.css')}}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    /* Default styles */
    /* ... */

    /* Dark mode styles */
    body.dark-mode {
        background-color: #1f1f1f;
        /* color: #ffffff; */
        /* Add more dark mode styles */
    }
</style>
</head>
<body class="{{ auth()->check() && auth()->user()->dark_mode ? 'dark-mode' : '' }}">
