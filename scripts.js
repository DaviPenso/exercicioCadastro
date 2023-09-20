$(document).ready(function (){
    
    $('#login-alunos').on('submit', function () {
        const nome = $("#nome").val();
        const senha = $("#senha").val();

        $.ajax({
            url: './actions/login.php',
            type: 'POST',
            data: {
                "email": nome,
                "senha": senha
            },
            success: function (response) {
                const info = jQuery.parseJSON(response);

                if (info.code == 200) {
                    $("#userdata").html(`
                        <div class='mt-3 border-top pt-3'>
                            <h5>Dados do usuário</h5>
                            Nome: ${info.data.usuario.nome} <br>
                            Senha: ${info.data.usuario.senha} <br>
                        </div>
                    `);
                } else {
                    $("#userdata").html(`
                        <div class='mt-3 alert alert-danger'>
                            Erro: ${info.message}
                        </div>
                    `);
                }
            }
        });

        return false;
    });
    
    $('#cadastro-alunos').on('submit', function (){
        const nome = $("#nome").val();
        const idade = $("#idade").val();
        const estado = $("#estado").val();
        const cidade = $("#cidade").val();
        const senha = $("#senha").val();
        /* Enviando os Dados para o Servidor, utilizando Ajax */

        $.ajax({
            url: './actions/cadastroAlunos.php' ,
            type: 'POST' ,
            data: {
                "nome" : nome,
                "idade" : idade,
                "estado" : estado,
                "cidade" : cidade,
                "senha" : senha
            } ,
            success: function (response) {
                const info = jQuery.parseJSON(response);

                if (info.code == 200) {
                    $("#mensagem").html(`
                        <div class='mt-3 alert alert-success'>
                            ${info.message}
                        </div>
                    `);
                } else {
                    $("#mensagem").html(`
                        <div class='mt-3 alert alert-danger'>
                            Erro: ${info.message}
                        </div>
                    `);
                }
            }
        })
        return false;
    })
})