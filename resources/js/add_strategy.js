$(document).ready(function() {
    $('.add-strategy').on('click', function() {
        var strategyId = $(this).data('strategy-id');
        var formData = {
            'strategy_id': strategyId,
            '_token': $('input[name="_token"]').val()
        };

        $.ajax({
            url: '/user/add-strategy',
            type: 'POST',
            contentType: 'application/json', 
            data: JSON.stringify(formData),
            success: function(response) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Success!',
                    text: 'Strategy added successfully!',
                    showConfirmButton: false,
                    timer: 1500,
                    toast: true
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Error',
                    text: 'Error adding strategy.',
                    showConfirmButton: false,
                    timer: 1500,
                    toast: true
                });
                console.error('Error:', error);
            }
        });
    });
});
