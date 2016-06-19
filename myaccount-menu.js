
$(document).ready(function(){

    $('.my-account-section').hide().first().show();

    $('.menuaccount a').click(function() {
        var clickedSection = $(this).attr('data-section');
        $('.my-account-section').hide();
        $('.' + clickedSection).show();
    });

    $('#form_change_password').append('<div id="form_change_password_err"></div>');
    $('#form_change_password').submit(function(e) {
        e.preventDefault();
        $('#form_change_password_err').text('');
        $.ajax({
            url: "change-password-process.php",
            type: 'POST', 
            data: {
                newpassword       : $('input[name="newpassword"]').val(),
                confirmnewpassword: $('input[name="confirmnewpassword"]').val()
            },
            success: function(response) {
                if ( response === 'success' ) {
                    $('#form_change_password').get(0).reset();
                    alert('Parola a fost schimbata cu success');
                } else {
                    $('#form_change_password_err').text(response);
                }
            }
        });
    });
});
