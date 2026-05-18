document.getElementById('form-login').addEventListener('submit', function(e) {
    e.preventDefault();

    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;

    const lista = JSON.parse(localStorage.getItem('bancoUsuario')) || [];
    const usuario = lista.find(u => u.email === email && u.password === senha);

    if (usuario) {
        sessionStorage.setItem('usuarioLogado', JSON.stringify(usuario));
        window.location.href = 'index.html';
    } else {
        document.getElementById('msg-erro').style.display = 'block';
    }
});