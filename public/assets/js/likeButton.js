// custom.js

$(document).ready(function () {
    // Set CSRF token for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Function to update like button appearance
    function updateLikeButtonAppearance(blogId, likeCheckUrl) {
        $.ajax({
            url: likeCheckUrl,
            type: 'GET',
            success: function (data) {
                var button = $('.like-button[data-blog-id="' + blogId + '"]');
                if (data.liked) {
                    button.addClass('liked');
                    button.find('i').removeClass('far').addClass('fas');
                } else {
                    button.removeClass('liked');
                    button.find('i').removeClass('fas').addClass('far');
                }
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    }

    // Event listener for like button click
    $('.like-button').on('click', function () {
        var button = $(this);
        var blogId = button.data('blog-id');
        var toggleLikeUrl = button.data('toggle-like-url');

        $.ajax({
            url: toggleLikeUrl,
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content') // CSRF token
            },
            success: function (data) {
                if (data.success) {
                    updateLikeButtonAppearance(blogId, button.data('like-check-url'));
                }
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });

    // Fetch and update like button appearance for each button on page load
    $('.like-button').each(function () {
        var blogId = $(this).data('blog-id');
        var likeCheckUrl = $(this).data('like-check-url');
        updateLikeButtonAppearance(blogId, likeCheckUrl);
    });
});
