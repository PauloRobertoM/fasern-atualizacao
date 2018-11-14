(function($, window) {
    $(window).scroll(function(){
        if($(window).scrollTop() >= 200)
        {
            $('#meuMenu').addClass('fixo').fadeIn();
        }else{
            $('#meuMenu').removeClass('fixo');
        }  
    });

    var campos_max = 10;
    var x = 0;
    $('#add_field').click (function(e) {
        e.preventDefault();
        if (x < campos_max) {
            $('#listas').append('<div class="div-removida">\
                <div class="col-md-5 col-sm-5">\
                        <input type="text" class="form-control" name="nome[]" placeholder="Nome">\
                    </div>\
                    <div class="col-md-2 col-sm-2">\
                        <input type="text" class="form-control" name="cpf[]" placeholder="CPF">\
                    </div>\
                    <div class="col-md-2 col-sm-2">\
                        <input type="text" class="form-control" name="nascimento[]" placeholder="Data de Nascimento">\
                    </div>\
                    <div class="col-md-2 col-sm-2">\
                        <input type="text" class="form-control" name="rateio[]" placeholder="% Rateio">\
                    </div>\
                    <div class="col-md-1 col-sm-1">\
                        <a href="#" class="remover_campo">Remover</a>\
                    </div>\
                </div>');
            x++;
        }
    });
    // Remover o div anterior
    $('#listas').on("click",".remover_campo",function(e) {
        e.preventDefault();
        $('.div-removida').remove();
        x--;
    });

    $('#loading').hide();
    $('p.form-feedback').hide();

    $('#button').click(function(){
        $('div.form-item').addClass("has-error");
        $('p.form-feedback').show();
        $(this).addClass("form-button-loading");
        $('#submit').hide();
        $('#loading').fadeIn(400);
    });

    $("#_form_contato").on("submit", function( event ) {
        event.preventDefault();

        var $callbacks = $("#_contato_callbacks");
        var formData = new FormData();

        formData.append("action", "contato");
        formData.append("nome", $("#nome").val());
        formData.append("matricula", $("#matricula").val());

        $.ajax({
            type: "post",
            url: ajaxurl,
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            beforeSend: function() {
                $callbacks.find(".alert").remove();
            },
            success: function(res) {
                if ( res.erros ) {
                    $callbacks.prepend(createAlert('danger', res.erros[0]));
                } else {
                    // clearValues(["#contato_nome", "#contato_email", "#contato_assunto", "#contato_mensagem"]);
                    // $callbacks.prepend(createAlert('success', 'Contato enviado com sucesso. Em breve entraremos em contato através dos dados informados no formulário.'));
                    alert("Contato enviado com sucesso.");
                }
            },
            error: function(res) {
                // $callbacks.prepend(createAlert('danger', 'ops, estamos com problemas em nosso servidor. tente de novo mais tarde.'));
                alert("Ops, estamos com problemas em nosso servidor. Tente de novo mais tarde.");
            },
            complete: function(res) {
                console.log("complete");
                $("html, body").animate({ scrollTop: $("#_form_contato").offset().top-100 }, 600);
            }
        });
    });
})(jQuery, window);