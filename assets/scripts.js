(function($){
    $(document).on('submit', '#form_agendamento', function(e){
        let form = $(e.target);
        let botao = form.find('button');
        e.preventDefault();
        $.ajax({
            url:'forms.php',
            type:'POST',
            dataType: 'json',
            data:{ 
                acao:'agendamento',
                empresa:form.find('[name="empresa"]').val(),
                nome:form.find('[name="nome"]').val(),
                email:form.find('[name="email"]').val(),
                data:form.find('[name="data"]').val(),
                telefone:form.find('[name="telefone"]').val(),
            },
            beforeSend: function(){
                botao.prop('disabled', true).text('Processando...');
            },
            success: function(response){
                if(response.status === true){
                    alert('Agendamento realizado com sucesso!');
                    form.get(0).reset();
                } else {
                    alert(response.erro)
                }
            },
            complete: function(){
                botao.prop('disabled', false).text('Agendar');
            }
        });
    });

    $(document).on('submit', '#form_contato', function(e){
        let form = $(e.target);
        let botao = form.find('button');
        e.preventDefault();
        $.ajax({
            url:'forms.php',
            type:'POST',
            dataType: 'json',
            data:{ 
                acao:'contato',
                ramo:form.find('[name="ramo"]').val(),
                nome:form.find('[name="nome"]').val(),
                email:form.find('[name="email"]').val(),
                telefone:form.find('[name="telefone"]').val(),
                mensagem:form.find('[name="mensagem"]').val(),
            },
            beforeSend: function(){
                botao.prop('disabled', true).text('Enviando...');
            },
            success: function(response){
                if(response.status === true){
                    alert('Mensagem enviada com sucesso!');
                    form.get(0).reset();
                } else {
                    alert(response.erro)
                }
            },
            complete: function(){
                botao.prop('disabled', false).text('Enviar');
            }
        });
    });
})(jQuery);