$(document).ready(function() {
    $.ajax({
        url: '/account-summary',
        type: 'GET',
        success: function(response) {
            if (response.success) {
                $('#account_balance').text(response.available_withdrawal_funds + ' BTC');
                $('#account_balance2').text(response.available_withdrawal_funds + ' BTC');
            } else {
                console.error('Failed to retrieve account balance:', response.error);
                $('#account_balance').text('Error fetching balance');
                $('#account_balance2').text('Error fetching balance');
            }
        },
        error: function(xhr) {
            console.error('Request failed:', xhr.responseText);
            $('#account_balance').text('Error fetching balance');
            $('#account_balance2').text('Error fetching balance');
        }
    });
});