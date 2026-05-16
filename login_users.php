<!--area de login do usuario-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BloodLovrz</title>

    <link rel="stylesheet" href="dash.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<?php
include 'sidebar.php';
?>

<main>
    <section class="card-form">

        <div class="form-header">
            <h2>
                <i class="fa-solid fa-user-plus"></i>
                Novo usuário
            </h2>

            <p>Preencha os dados abaixo para registrar um novo acesso</p>
        </div>

        <form onsubmit="cadastrarUsuario(); return false;">

            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" placeholder="Ex: Lucas Matos" required>
            </div>

            <div class="form-group">
                <label for="data">Data de nascimento</label>
                <input type="date" id="data" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="nome@empresa.com" required>
            </div>

            <div class="form-row">

                <div class="form-group flex-1">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" required>
                </div>

                <div class="form-group flex-1">
                    <label for="nivel">Nível</label>

                    <select id="nivel">
                        <option value="1">Usuário</option>
                        <option value="2">Administrador</option>
                    </select>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-save">
                    Finalizar cadastro
                </button>

                <a href="index.php" class="btn-cancel">
                    Cancelar
                </a>
            </div>
        </form>
</html>