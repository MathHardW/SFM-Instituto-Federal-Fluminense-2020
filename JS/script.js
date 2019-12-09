$(function () {
    $('form#form-msg').submit(function () {
        $.ajax({
            type: 'POST',
            url: 'action.php',
            data: {
                mensagem: $('textarea[name=mensagem').val()
            }
        }).done(function(retorno){
            $('div.comments').append(retorno);
            mensagem: $('textarea[name=mensagem').val('');
        });
        
        return false;
    });
});