function abrir_modal_view_filme(id) {
    var modal_view = document.querySelector('.modal_view_filme');

    modal_view.style.display = 'flex';

    $.ajax({
        type:'POST',
        url:'home/index',
        data:{id:id},
        dataType: 'json',
        success: function (retorno) {
            console.log(retorno)

            let filme = JSON.parse(retorno);
            $('#nome').val(filme.nome);
        },
        error: function (error) {
            alert("Erro ao processar requisição!")
            console.log(error);
        }
    });
}

function fechar_modal_filme() {
    var modal_view = document.querySelector('.modal_view_filme');

    modal_view.style.display = 'none';
}