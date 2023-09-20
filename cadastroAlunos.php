<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="d-flex align-items-center justify-content-center mt-4">
            <a href="./index.php" class="me-3 btn btn-primary">Home</a>
            <a href="./loginAlunos.php" class="btn btn-primary">Login</a>
        </div>
    </header>
    <main class="form-signin w-50 m-auto">
        <div class="card mt-5">
            <div class="card-body shadow">
                <form id="cadastro-alunos">
                    <h1 class="text-center mt-5">Cadastro de Alunos</h1>
                    <div class="form-group mt-3">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control form-control-lg" name="nome" id="nome" placeholder="Por favor, informe seu nome completo" require> 
                    </div>
                    <div class="form-group mt-3">
                        <label for="idade">Idade</label>
                        <input type="number" class="form-control form-control-lg" name="idade" id="idade" placeholder="Por favor, informe sua idade" require>
                    </div>
                    <div class="form-group mt-3">
                        <label for="estado">Estado</label>
                        <select class="form-control form-control-lg" name="estado" id="estado" require>
						<option value="">Por favor, selecione o estado</option>
						<option value="AC">AC</option>
						<option value="AL">AL</option>
						<option value="AP">AP</option>
						<option value="AM">AM</option>
						<option value="BA">BA</option>
						<option value="CE">CE</option>
						<option value="DF">DF</option>
						<option value="ES">ES</option>
						<option value="GO">GO</option>
						<option value="MA">MA</option>
						<option value="MT">MT</option>
						<option value="MS">MS</option>
						<option value="MG">MG</option>
						<option value="PA">PA</option>
						<option value="PB">PB</option>
						<option value="PR">PR</option>
						<option value="PE">PE</option>
						<option value="PI">PI</option>
						<option value="RJ">RJ</option>
						<option value="RN">RN</option>
						<option value="RS">RS</option>
						<option value="RO">RO</option>
						<option value="RR">RR</option>
						<option value="SC">SC</option>
						<option value="SP">SP</option>
						<option value="SE">SE</option>
						<option value="TO">TO</option>
					</select>
                    </div>
                    <div class="form-group mt-3">
					    <label for="cidade">Cidade</label>
					    <input type="text" class="form-control form-control-lg" name="cidade" id="cidade" placeholder="Por favor, informe sua cidade" require>
				    </div>
                    <div>
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control form-control-lg" name="senha" id="senha" placeholder="Por favor, informe sua senha" require>
                    </div>
                    <div class="col-lg-12" style="text-align: right;">
                        <button class="btn btn-primary py-1 mt-4" type="submit">Cadastrar Aluno</button>
                    </div>
                    <div id="mensagem"></div>
                    <p class="mt-5 mb-3 text-body-secondary" style="text-align: center;">&copy; 19/09/2023</p>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./scripts.js" type="text/javascript"></script>
</body>
</html>