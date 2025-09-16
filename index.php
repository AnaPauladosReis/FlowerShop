<?php
$page_title = "Floresça Flower Studio - Login";
include 'header.php';

// Verificar se já está logado
if(isset($_SESSION['usuario'])) {
    header("Location: dashboard.php");
    exit();
}

// Processar formulário de login
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // Verificação básica (em um projeto real, isso viria do banco de dados)
    if($email === 'emaildafirma' && $senha === 'senha') {
        $_SESSION['usuario'] = $email;
        header("Location: dashboard.php");
        exit();
    } else {
        $erro = "Email ou senha incorretos!";
    }
}
?>


<div class="login-body">
    <div class="login-container">
        <div class="logo">
            <h1>FLORESÇA</h1>
            <h2>FLOWER STUDIO</h2>
        </div>
        
        <form method="POST" action="" class="login-form">
            <?php if(isset($erro)): ?>
                <div class="erro"><?php echo $erro; ?></div>
            <?php endif; ?>
            
            <div class="input-group">
                <label for="email">USUÁRIO</label>
                <input type="text" id="email" name="email" value="emaildafirma">
            </div>
            
            <div class="input-group">
                <label for="senha">SENHA</label>
                <input type="password" id="senha" name="senha" value="senha">
            </div>
            
            <button type="submit" class="btn-login">ENTRAR</button>
            
            <a href="#" class="forgot-password">Esqueceu a senha</a>
        </form>
    </div>
</div>

</body>
</html>