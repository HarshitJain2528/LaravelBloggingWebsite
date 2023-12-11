@extends('User.layouts.main')

@section('user-addposts-section')

@include('User.layouts.navbar')
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
@endsection
