$('#submitBtnConnector').on('click', function() {
    var formData = {
        'name': $('#name').val(),
        'exchange_name': $('#exchange_name').val(),
        'public_key': $('#public_key').val(),
        'private_key': $('#private_key').val(),
        '_token': $('input[name="_token"]').val(),
    };

    $.ajax({
        url: '/exchangeconnector/store',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(formData),
        success: function (response) {
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
                    <td style="padding: 5px;">${data.exchange_name}</td>
                    <td style="padding: 5px; vertical-align: middle;" colspan="2">
                        <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteConnector(${data.id})">Delete</button>
                    </td>
                </tr>`;

                $('table tbody').append(newRow);
                $('#exchangeConnectorModal').modal('hide');
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
                    title: 'Failed to create connector!',
                    html: 'Please check your inputs and try again.',
                    showConfirmButton: false,
                    timer: 1500,
                    toast: true
                });
            }
        },
        error: function (xhr, status, error) {
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
