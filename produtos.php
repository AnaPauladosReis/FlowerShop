<?php
session_start();
// Verificar se está logado
if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Produtos - Floresça</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>FLORESÇA FLOWER STUDIO</h1>
        <div>
            <span>Olá, <?php echo $_SESSION['usuario']; ?></span>
            <a href="logout.php" style="color: white; margin-left: 15px;">Sair</a>
        </div>
    </div>
    
    <div class="sidebar">
        <ul>
            <li><a href="dashboard.php">PAINEL</a></li>
            <li><a href="produtos.php">PRODUTOS</a></li>
            <li><a href="#">PEDIDOS</a></li>
            <li><a href="usuarios.php">USUÁRIOS</a></li>
            <li><a href="#">RELATÓRIOS</a></li>
        </ul>
    </div>
    
    <div class="main-content">
        <h1>GERENCIAMENTO DE PRODUTO</h1>
        
        <div class="card">
            <input type="text" placeholder="BUSCAR PRODUTOS..." style="padding: 10px; width: 100%; margin-bottom: 1rem;">
            
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagem</th>
                        <th>Nome do Produto</th>
                        <th>Preço</th>
                        <th>Estoque</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100</td>
                        <td>Flor</td>
                        <td>Buquê Rosa Vermelha</td>
                        <td>R$85.00</td>
                        <td>15</td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td>101</td>
                        <td>Planta</td>
                        <td>Monstera deliciosa</td>
                        <td>R$79.00</td>
                        <td>12</td>
                        <td>✔</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="card">
            <h3>Adicionar Novo Produto</h3>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                
                <div class="form-group">
                    <label for="descricao">Descrição do Produto</label>
                    <textarea id="descricao" name="descricao" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="number" id="preco" name="preco" step="0.01" required>
                </div>
                
                <div class="form-group">
                    <label for="estoque">Estoque</label>
                    <input type="number" id="estoque" name="estoque" required>
                </div>
                
                <div class="form-group">
                    <label for="imagem">Imagem do Produto</label>
                    <input type="file" id="imagem" name="imagem">
                </div>
                
                <button type="submit" class="btn btn-primary">SALVAR</button>
            </form>
        </div>
    </div>
</body>
</html>