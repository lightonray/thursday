// Setting CSRF token globally might not be necessary if you include the token in the FormData object

// Start Bot
$('#startBotBtn').on('click', function() {
    var formData = new FormData();
    formData.append('bot_id', $(this).data('bot-id'));
    formData.append('_token', $('input[name="_token"]').val()); // Assuming you have CSRF token in a hidden input field

    $.ajax({
        url: '/bot/start',
        type: 'POST',
        processData: false,  // Important: don't process the files
        contentType: false,  // Important: set content type to false
        data: formData,
        success: function(response) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Bot started successfully!',
                showConfirmButton: false,
                timer: 1500,
                toast: true
            });
        },
        error: function(xhr) {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Failed to start bot!',
                text: xhr.responseText,
                showConfirmButton: false,
                timer: 1500,
                toast: true
            });
        }
    });
});

// Stop Bot
$('#stopBotBtn').on('click', function() {
    var formData = new FormData();
    formData.append('bot_id', $(this).data('bot-id'));
    formData.append('_token', $('input[name="_token"]').val()); // Same assumption as above

    $.ajax({
        url: '/bot/stop',
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        success: function(response) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Bot stopped successfully!',
                showConfirmButton: false,
                timer: 1500,
                toast: true
            });
        },
        error: function(xhr) {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Failed to stop bot!',
                text: xhr.responseText,
                showConfirmButton: false,
                timer: 1500,
                toast: true
            });
        }
    });
});
