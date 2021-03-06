$(document).on('submit', '.ajax-form', function (e) {
    e.preventDefault();
    var formID = $(this),
        formAction = $(this).attr('action'),
        formPush = $(this).data('push'),
        formInputs = 'input, select, textarea';

    // Disable submit button
    $(this).find('button[type="submit"]').attr('disabled', true);

    // Inject messages container
    var emptyMessages = '<div class="blank alert">Please wait...</div>';
    if ( $(document).find('.messages').length == 0 ) {
        $(this).prepend('<div class="messages">'+ emptyMessages +'</div>');
    } else {
        $(this).find('.messages').html(emptyMessages);
    }

    // Validate required inputs
    $(formInputs).each(function() {
        if ($(this).data('required') && $(this).val() == '') {
            $(this).addClass('has-error');
        }
    });

    // Form data
    var formData = new FormData(this);

    $.ajax({

        url: formAction,
        type: 'POST',
        data: formData,
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        success: function(response) {

            /**
             * AJAX post calls will
             * return a JSON response
             * with an response code
             * and a message.
             *
             * 200 = OK, all went well
             * 100 = There was an error
             *
             * console.log(response); <-- uncomment this to log
             * the response to the console.
             */

            console.log(response);
            //$('body').prepend('<pre>'+ JSON.stringify(response) +'</pre>');

            // Positive response
            if ( response.code == 200 ) {
                $(formID)[0].reset();

                if (formPush && formPush !== 'this') {
                    window.location.href = formPush;
                } else if (formPush && formPush === 'this') {
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }
            }

            // Response template
            var template = '<div class="alert '+ response.type +'">'+ response.message +'</div>';

            $(document).find('.messages').html(template);
            $(this).find('button[type="submit"]').removeAttr('disabled');

        },
        error: function(response) {

            /**
             * Uncomment the lines
             * below to print the response
             * to the console and the top
             * of the page
             *
             * console.log(response);
             * $('body').prepend('<pre>'+ JSON.stringify(response) +'</pre>');
             */

            console.log(response);
            //$('body').prepend('<pre>'+ JSON.stringify(response) +'</pre>');

            // Response template
            var template = '<div class="alert error">There was an error submitting the form. Please make sure you submit all required fields.</div>';

            $(document).find('.messages').html(template);
            $(this).find('button[type="submit"]').removeAttr('disabled');

        }

    });

    window.scrollTo(0,0);
});
