$('#submitBtnBot').on('click', function() {
    var formData = {
        'bot_name': $('#bot_name').val(),
        'exchange_connector': $('#exchange_connector').val(),
        'symbol': $('#symbol').val(),
        'strategy': $('#strategy').val(), // Add the selected strategy ID
        '_token': $('input[name="_token"]').val(),
    };

    $.ajax({
        url: '/bot/store',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(formData),
        success: function(response) {
            if (response.success) {
                var data = response.data;
                var newRow = `<tr>
                    <td style="padding: 5px;">
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">${data.name}</p>
                            </div>
                        </div>
                    </td>
                    <td style="padding: 5px;">${data.name}</td>
                    <td style="padding: 5px;">${data.symbol}</td>
                    <td style="padding: 5px; vertical-align: middle;">
                        <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteBot(${data.id})">Delete</button>
                    </td>
                </tr>`;

                $('table tbody').append(newRow);
                $('#botModal').modal('hide');
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Success!',
                    text: response.message,
                    showConfirmButton: false,
                    timer: 1500,
                    toast: true
                });
            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Failed to create bot!',
                    html: 'Please check your inputs and try again.',
                    showConfirmButton: false,
                    timer: 1500,
                    toast: true
                });
            }
        },
        error: function(xhr, status, error) {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Server Error',
                text: 'Please try again later.',
                showConfirmButton: false,
                timer: 1500,
                toast: true
            });
            console.error('Error:', error);
        }
    });
});
