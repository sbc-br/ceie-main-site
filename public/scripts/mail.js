$(document).ready(function(){

    var showMessage = function(title, content, closeCallback){

        $('#app-modal-dialog').unbind();

        $('#app-modal-dialog').on('show.bs.modal', function (event) {
            var modal = $(this);

            modal.find('.modal-title').text(title);
            modal.find('.modal-body').html(content);
          });

          $('#app-modal-dialog').on('hidden.bs.modal', closeCallback);

          $('#app-modal-dialog').modal('show');
    };

    var toggleLoading = function(){
        $('#contact_button_arrow').toggleClass('d-none');
        $('#contact_button_loading').toggleClass('d-none');
    };


    $('#contact_send').click(function(e){

        e.preventDefault();

        toggleLoading();

        var guest = { name: '', email: '', message: { subject: '', content: ''} };

        $('#contact_form input, #contact_form textarea').each(function(index){

            var field = $(this);

            var fieldName = field.attr('name');
                fieldName = fieldName.replace('contact_', '').replace('_', '\.');

            var fieldValue = field.val();

            eval('guest.' + fieldName + ' = "' + fieldValue + '";' );
        });

        guest = JSON.stringify(guest);

        $.ajax({
            type: 'POST', url: baseUrl + '/api/contact',
            dataType: 'json', contentType: "application/json; charset=utf-8",
            data: guest,

            success: function(data){

                toggleLoading();

                showMessage('Portal da CEIE', data.message, function(){
                    $('#contact_form').trigger('reset');
                    $('#contact_form input[name="contact_name"]').focus();
                });
            },

            error: function(response){

                toggleLoading();

                var data = response.responseJSON;
                var error = '';

                if (data.status === 'VALIDATION_ERROR'){

                    var errors = '<p><strong>Erro ao enviar a mensagem:</strong></p><p></p>';

                    Object.keys(data.errors).forEach(fieldName => {
                        data.errors[fieldName].forEach(error => {
                            errors = errors + '<div>' + error + '</div>';
                        });
                    });

                    showMessage('Portal da CEIE', errors, function(){

                        var fieldName = Object.keys(data.errors)[0].replace('.', '_');
                        var inputQuery = '#contact_form input[name="contact_' + fieldName + '"]';
                        var textareaQuery = '#contact_form textarea[name="contact_' + fieldName + '"]';
                        var fieldQuery = inputQuery + ', ' + textareaQuery;

                        $(fieldQuery).focus();
                    });
                }
                else if (data.status === 'ERROR'){
                    showMessage('Portal da CEIE', data.message);
                }
            }
        });
    });
});

