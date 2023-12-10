<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Post - Your Blog</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    /* Custom styles... */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }
    .navbar-brand {
      font-size: 1.8rem;
      font-weight: bold;
      letter-spacing: 1px;
    }
    .navbar {
      padding: 25px 0;
      background-color: #f8f9fa; /* Light Gray */
      border-bottom: 1px solid #e9ecef; /* Light Gray border */
    }
    .navbar-toggler {
      border-color: #333; /* Darker Gray */
    }
    .navbar-toggler-icon {
      background-color: #333; /* Darker Gray */
    }
    .navbar-nav .nav-link {
      color: #333; /* Darker Gray */
      font-size: 1.2rem;
      text-transform: uppercase;
      margin-right: 25px;
      transition: color 0.3s;
    }
    .navbar-nav .nav-link:hover {
      color: #f44336; /* Red */
    }
    .add-post-btn {
      background-color: #f44336;
      color: #fff;
      border: none;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      font-size: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    .add-post-btn:hover {
      background-color: black;
    }

    /* Add Post Form Styling */
    .add-post-container {
      max-width: 800px;
      margin: 50px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .form-control {
      margin-bottom: 20px;
    }
    .form-label {
      font-weight: bold;
    }
    .btn-submit {
      background-color: #f44336;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    .btn-submit:hover {
      background-color: #dc3545;
    }
  </style>
</head>
<body>
    <!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Your Blog</a>
      <!-- Toggle button for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navigation links -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sign Up</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link add-post-btn" aria-label="Add Post">
              <i class="fas fa-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


   <!-- Add Post Form -->
   <div class="container">
    <div class="add-post-container">
      <h2 class="text-center mb-4">Add New Post</h2>
      <form enctype="multipart/form-data">
        <div class="mb-3">
          <label for="postTitle" class="form-label">Title</label>
          <input type="text" class="form-control" id="postTitle" placeholder="Enter the post title" required>
        </div>
        <div class="mb-3">
          <label for="postContent" class="form-label">Content</label>
          <textarea class="form-control" id="postContent" name="postContent" rows="6" placeholder="Enter the post content" required></textarea>
        </div>
        <div class="mb-3">
          <label for="postImage" class="form-label">Upload Image</label>
          <input type="file" class="form-control" id="postImage" accept="image/*" required>
        </div>
        <div class="mb-3">
          <label for="postCategory" class="form-label">Category</label>
          <select class="form-select" id="postCategory" required>
            <option selected disabled>Select a category</option>
            <option value="1">Category 1</option>
            <option value="2">Category 2</option>
            <!-- Add categories dynamically from your database -->
          </select>
        </div>
        <button type="submit" class="btn btn-submit">Submit</button>
      </form>
    </div>
  </div>

  <script>
    tinymce.init({
      selector: '#postContent',
      plugins: 'lists link image imagetools media table code wordcount',
      toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | link image media table | code',
      image_title: true,
      automatic_uploads: true,
      file_picker_types: 'image',
      file_picker_callback: function(callback, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
  
        input.onchange = function() {
          var file = this.files[0];
  
          var reader = new FileReader();
          reader.onload = function(e) {
            callback(e.target.result, { alt: '' });
          };
          reader.readAsDataURL(file);
        };
  
        input.click();
      },
      images_upload_handler: function(blobInfo, success, failure) {
        var formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
  
        // Send formData to your server-side script for handling file upload
        // Replace 'YOUR_UPLOAD_ENDPOINT' with your server endpoint
        fetch('YOUR_UPLOAD_ENDPOINT', {
          method: 'POST',
          body: formData,
        })
          .then(response => response.json())
          .then(result => {
            if (result.success) {
              success(result.location);
            } else {
              failure('Upload failed');
            }
          })
          .catch(error => {
            failure('Upload failed: ' + error);
          });
      },
      menubar: false,
      images_upload_url: 'YOUR_UPLOAD_ENDPOINT',
    });
  </script>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
