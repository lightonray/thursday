$('#startBotBtn').on('click', function() {
    var $btn = $(this); // Cache the button
    var formData = new FormData();
    formData.append('bot_id', $btn.data('bot-id'));
    formData.append('_token', $('input[name="_token"]').val());

    $.ajax({
        url: '/bot/start',
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        success: function(response) {
            // Update UI
            $('#bot_status span').text('running').closest('.status-container')
                .removeClass('status-stopped').addClass('status-running');
            
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

$('#stopBotBtn').on('click', function() {
    var $btn = $(this); // Cache the button
    var formData = new FormData();
    formData.append('bot_id', $btn.data('bot-id'));
    formData.append('_token', $('input[name="_token"]').val());

    $.ajax({
        url: '/bot/stop',
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        success: function(response) {
            // Update UI
            $('#bot_status span').text('stopped').closest('.status-container')
                .removeClass('status-running').addClass('status-stopped');
            
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
