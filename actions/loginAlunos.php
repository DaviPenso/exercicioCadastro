<?php

session_start();

include "../MySQL.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $vrfAluno = new MySQL([
        "dbserver" => "localhost",
        "username" => "root",
        "password" => "",
        "database" => "cadastro",
    ]);
    $vrfAluno->Query("SELECT * FROM alunos WHERE nome = '{$nome}'");

    if ($vrfAluno->RowCount() != false) {
        $usuario = $vrfAluno->Row();

        if (!password_verify($senha, $usuario->senha)) {
            $response = [
                "code" => 500,
                "message" => "Login falhou. Verifique sua senha!"
            ];
            echo json_encode($response);
            exit;
        }

        // Senha o email e senha estão corretos
        $_SESSION['LOGADO'] = true;

        unset($usuario->senha);
        $_SESSION['USER'] = $usuario;
        $response = [
            "code" => 200,
            "message" => "Login realizado com sucesso!",
            "data" => [
                "usuario" => $usuario
            ]
        ];
        echo json_encode($response);
        exit;
    } else {
        $response = [
            "code" => 500,
            "message" => "Login falhou. Verifique seu Email!"
        ];
        echo json_encode($response);
        exit;
    }

}