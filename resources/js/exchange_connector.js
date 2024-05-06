$(function() {
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
            success: function (data) {
                $('#exchangeConnectorModal').modal('hide'); // Hide modal first
                $('#exchangeConnectorModal').on('hidden.bs.modal', function () {
                    if (data.success) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Success!',
                            text: data.message || 'Connector created successfully!',
                            showConfirmButton: false,
                            timer: 3000,
                            toast: true
                        });
                    } else {
                        var errorMsg = 'Error occurred!';
                        if (data.errors) {
                            errorMsg = Object.values(data.errors).map(function (items) {
                                return items.join('<br />');
                            }).join('<br />');
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Failed to create connector!',
                            html: errorMsg,
                            showConfirmButton: false,
                            timer: 3000,
                            toast: true
                        });
                    }
                });
            },
            error: function (xhr, status, error) {
                $('#exchangeConnectorModal').modal('hide');
                $('#exchangeConnectorModal').on('hidden.bs.modal', function () {
                    var response = xhr.responseJSON;
                    var errorMsg = 'Server Error. Please try again later.';
                    if (response && response.errors) {
                        errorMsg = Object.values(response.errors).map(function (items) {
                            return items.join('<br />');
                        }).join('<br />');
                    }
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Error!',
                        html: errorMsg,
                        showConfirmButton: false,
                        timer: 3000,
                        toast: true
                    });
                });
                console.error('Error:', error);
            }
        });
    });
});
