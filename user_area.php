# user_area.php

```php
<!--area de gerenciamento de usuário-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de usuários</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<?php
include 'sidebar.php';
?>

<main>
    <div class="header-container">
        <h1>Gerenciamento de usuários</h1>
        <p>Gerencie as configurações do usuário</p>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Acesso</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>01</td>
                    <td>Lucas Matos</td>
                    <td>lucasmatos2727@example.com</td>
                    <td>Administrador</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td>
                        <a href="#" class="btn-acao btn-editar">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <a href="#" class="btn-acao btn-excluir">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>02</td>
                    <td>Duda Silva</td>
                    <td>dudasilva2504@example.com</td>
                    <td>Usuário</td>
                    <td><span class="badge inativo">Inativo</span></td>
                    <td>
                        <a href="#" class="btn-acao btn-editar">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <a href="#" class="btn-acao btn-excluir">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

</body>
</html>
```

---

# sidebar.php

```php
<!--barra lateral de navegação-->
<div class="dashboard-container">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login_users.php">Login</a></li>
            <li><a href="user_area.php">Gerenciamento de usuário</a></li>
            <li><a href="https://en.wikipedia.org/wiki/Bloodborne">Wikipédia</a></li>
            <li><a href="https://youtu.be/KwEWUq41Dck?si=zQZpvntNnok5ILAq">Para mais informações</a></li>
            <li><a href="https://www.playstation.com/pt-br/games/bloodborne/">Onde comprar</a></li>
        </ul>

        <div class="perfil-usuario">
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Foto de perfil do usuário">
            <span>Lucas</span>
        </div>
    </nav>
</div>
```

---

# main_page.php

```php
<!--pagina principal de conteúdo-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>BloodLovrz</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>

<div class="dashboard-container">

    <?php include 'sidebar.php'; ?>

    <main>
        <section class="container-cards">

            <article>
                <h2>Speedrun Bloodborne</h2>
                <p>Any% 18:49 (recorde)</p>
                <a href="https://www.youtube.com/watch?v=qDruZHXA4mU" class="btn">Acessar</a>
            </article>

            <article>
                <h2>Gameplay completa</h2>
                <p>De sourcespy91</p>
                <a href="https://www.youtube.com/watch?v=VJyc-sD1DiY" class="btn">Acessar</a>
            </article>

            <article>
                <h2>Jogo de mesa de carta</h2>
                <p>Amazon</p>
                <a href="https://www.amazon.com.br/" class="btn">Acessar</a>
            </article>

        </section>
    </main>
</div>

</body>
</html>
```

---

# login_users.php

```php
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

        <br>

        <a href="lista.html">
            Ver lista de usuários
        </a>

    </section>
</main>

<script>

function cadastrarUsuario(){

    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;

    if(nome == "" || email == ""){
        alert("Preencha todos os campos");
        return;
    }

    let listaUsuarios =
        JSON.parse(localStorage.getItem("db_usuarios")) || [];

    let novoUsuario = {
        nome: nome,
        email: email
    };

    listaUsuarios.push(novoUsuario);

    localStorage.setItem(
        "db_usuarios",
        JSON.stringify(listaUsuarios)
    );

    alert("Usuário cadastrado com sucesso");

    document.getElementById("nome").value = "";
    document.getElementById("email").value = "";
}

</script>

</body>
</html>
```

---

# lista.html

```html
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
</head>
<body>

<h1>Lista de usuários</h1>

<table border="1">

    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody id="tabelaUsuarios"></tbody>

</table>

<script>

function listarUsuarios(){

    let listaUsuarios =
        JSON.parse(localStorage.getItem("db_usuarios")) || [];

    let tabela =
        document.getElementById("tabelaUsuarios");

    tabela.innerHTML = "";

    for(let i = 0; i < listaUsuarios.length; i++){

        tabela.innerHTML += `
            <tr>
                <td>${listaUsuarios[i].nome}</td>
                <td>${listaUsuarios[i].email}</td>
                <td>
                    <button onclick="editarUsuario(${i})">
                        Editar
                    </button>

                    <button onclick="excluirUsuario(${i})">
                        Excluir
                    </button>
                </td>
            </tr>
        `;
    }
}

function excluirUsuario(index){

    let listaUsuarios =
        JSON.parse(localStorage.getItem("db_usuarios"));

    listaUsuarios.splice(index, 1);

    localStorage.setItem(
        "db_usuarios",
        JSON.stringify(listaUsuarios)
    );

    listarUsuarios();
}

function editarUsuario(index){

    let listaUsuarios =
        JSON.parse(localStorage.getItem("db_usuarios"));

    let novoNome = prompt(
        "Digite o novo nome",
        listaUsuarios[index].nome
    );

    let novoEmail = prompt(
        "Digite o novo email",
        listaUsuarios[index].email
    );

    if(novoNome == "" || novoEmail == ""){
        alert("Campos inválidos");
        return;
    }

    listaUsuarios[index].nome = novoNome;
    listaUsuarios[index].email = novoEmail;

    localStorage.setItem(
        "db_usuarios",
        JSON.stringify(listaUsuarios)
    );

    listarUsuarios();
}

listarUsuarios();

</script>

</body>
</html>
```
