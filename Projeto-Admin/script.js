document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    // Obter valores do formulário
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  
    // Validar campos
    if (username === "" || password === "") {
      document.getElementById('error-message').textContent = "Todos os campos são obrigatórios!";
    } else {
      document.getElementById('error-message').textContent = "";
  
      // Simulação de autenticação (exemplo simples)
      if (username === "usuario" && password === "senha123") {
        alert("Login bem-sucedido!");
        // Redirecionar ou realizar outra ação após login bem-sucedido
        window.location.href = "home.html"; // Exemplo de redirecionamento
      } else {
        document.getElementById('error-message').textContent = "Usuário ou senha inválidos!";
      }
    }
  });
  