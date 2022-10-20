const _token = $("#_token").val();


const DeletarRoupa = (id_roupa) => {
    $.ajax({
        type: "DELETE",
        url: `index/delete/${id_roupa}`,
        data: {
            _token
        },
        success: function (response) {
            alert("Cadastro deletado com sucesso!");
            $(`#trindex-${id_roupa}`).remove();
        }
    });
}

