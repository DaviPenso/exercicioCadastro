<?php

include "../MySQL.php";

if ($_POST) {
    /* Recebendo as informações do formulário ../cadastroAlunos.php */
    $nome = $_POST ['nome'];
    $idade = $_POST ['idade'];
    $estado = $_POST ['estado'];
    $cidade = $_POST ['cidade'];
    $senha = $_POST ['senha'];

    /* Conectando com o banco de dados */
    $conexao = [
        "dbserver" => "localhost",
        "username" => "root",
        "password" => "",
        "database" => "cadastro",
    ];

    /* Verificando se o Aluno já está cadastrado */
    $vrfAluno = new MySQL($conexao);
    $vrfAluno->Query("SELECT * FROM alunos WHERE nome = '{$nome}'");
    if ($vrfAluno-> RowCount() != false) { 
        /* Se o Aluno já está cadastrado */
        $response = [
            "code" => 500,
            "message" => "O Aluno já está cadastrado",
        ];
        echo json_encode($response);
        exit;
    }

    /* Criptografando a senha */
    $senhaCrpt = password_hash($senha, PASSWORD_BCRYPT);

    /* Armazenando no Banco de Dados */
    $values['nome'] = MySQL::SQLValue($nome);
    $values['idade'] = MySQL::SQLValue($idade);
    $values['estado'] = MySQL::SQLValue($estado);
    $values['cidade'] = MySQL::SQLValue($cidade);
    $values['senha'] = MySQL::SQLValue($senhaCrpt);

    $add = new MySQL($conexao);
    $addResult = $add->InsertRow("alunos", $values);

    if (!$addResult) {
        $response = [
            "code" => 500,
            "message" => "Erro no cadastro do Aluno ({$add->Error()}).",
        ];
        echo json_encode($response);
        exit;
    }

    $response = [
        "code" => 200,
        "message" => "Parabéns! Cadastro de Aluno realizado com sucesso!",
    ];
    echo json_encode($response);
    exit;
}