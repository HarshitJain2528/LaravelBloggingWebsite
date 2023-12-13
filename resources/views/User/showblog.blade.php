@extends('User.layouts.main')

@section('user-showblog-section')
    @include('User.layouts.navbar')
    <div class="container">
        @foreach ($blogs as $blog)
            <div class="blog-container settingsCard">
                <img src="{{asset($blog->image)}}" alt="Blog Image" class="blog-image">
                <h2 class="blog-title">{{$blog->title}}</h2>
                <p class="blog-content">{{$blog->content}}</p>
                <div class="like-comment-buttons">
                    <button class="like-button" data-blog-id="{{ $blog->id }}" data-like-check-url="{{ route('blog.checkLikeStatus', ['blog' => $blog->id]) }}" data-toggle-like-url="{{ route('blog.toggleLike', ['blog' => $blog->id]) }}">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="comment-button" data-blog-id="{{ $blog->id }}">
                        <i class="fas fa-comment"></i>
                    </button>
                </div>

                <!-- Hidden inputs for each blog post -->
                <input type="hidden" class="blogId" value="{{ $blog->id }}">
                
                <!-- ... Your blog content ... -->
                <div class="modal fade" id="commentModal-{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel-{{ $blog->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px;">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="commentModalLabel-{{ $blog->id }}">Add Comment</h5>
                          </div>
                          <div class="modal-body">
                              <div class="existing-comments"></div>
                          </div>
                          <div class="modal-footer" style="padding-top: 0;">
                              <form class="commentForm" action="" method="POST" style="margin-bottom: 0;">
                                  @csrf
                                  <input type="hidden" name="category_id" class="categoryId" value="{{ $blog->category->id }}">
                                  <div class="form-group" style="margin-bottom: 0;">
                                      <div class="textarea-wrapper">
                                          <textarea class="form-control with-send-icon" name="content" rows="2" placeholder="Add a comment" style="resize: none;"></textarea>
                                          <button type="submit" class="btn btn-primary storecomment"><i class="fas fa-paper-plane send-icon"></i></button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>

            </div>
        @endforeach
    </div>
<style>
     .modal-dialog {
            margin: 1.75rem auto;
        }

        .modal-body {
            max-height: 200px;
            overflow-y: auto;
        }

        .modal-footer {
            border-top: none;
        }

        .textarea-wrapper {
            display: flex;
            align-items: center;
        }

        .with-send-icon {
            flex: 1;
            margin-right: 10px;
        }

        .btn-primary {
            width: 40px;
            height: 40px;
            padding: 5px;
        }

        .send-icon {
            font-size: 20px;
        }
</style>
<script>
  $(document).ready(function () {
      // Handle comment button click for each blog post
      $('.comment-button').on('click', function () {
          var blogId = $(this).data('blog-id');

          // Fetch comments using AJAX for the respective blog post
          var commentsUrl = "{{ route('comments', ['blog' => ':blogId']) }}".replace(':blogId', blogId);

          $.ajax({
              url: commentsUrl,
              type: 'GET',
              success: function (response) {
                  var commentsContainer = $('#commentModal-' + blogId + ' .existing-comments');
                  commentsContainer.empty();

                  if (response && response.comments && response.comments.length > 0) {
                      response.comments.forEach(function (comment,index) {
                          var commentContent = comment.comments; // Assuming 'comments' contains the comment text
                           // Bootstrap-styled comment structure
                          var commentHTML = '<div class="media mb-3">';
                          commentHTML += '<div class="media-body">';
                            commentHTML += '<h6 class="mt-0">Comment ' + (index + 1) +  '</h6>'; // Numbering comments
                          commentHTML += commentContent;
                          commentHTML += '</div></div>';

                          commentsContainer.append(commentHTML);
                      });
                  } else {
                      commentsContainer.append('<div>No comments available.</div>');
                  }

                  $('#commentModal-' + blogId).modal('show');
              },
              error: function (error) {
                  console.log(error);
              }
          });

          // Set the form action based on the current blog ID
          var actionUrl = "{{ route('comments.store', ['blog' => ':blogId']) }}".replace(':blogId', blogId);
          $('#commentModal-' + blogId + ' .commentForm').attr('action', actionUrl);
      });

      // Handle comment submission
      $('.commentForm').submit(function (e) {
          e.preventDefault();
          var formData = $(this).serialize();
          var form = $(this); // Store the form reference

          $.ajax({
              url: $(this).attr('action'),
              type: 'POST',
              data: formData,
              success: function (response) {
                $('.comment-button').trigger('click'); // Refresh comments after submission
                // $('#commentForm')[0].reset(); // Reset the form
                form[0].reset();
              },
              error: function (error) {
                  console.log(error);
              }
          });
      });
  });

  window.csrfToken = "{{ csrf_token() }}";

</script>

@endsection
