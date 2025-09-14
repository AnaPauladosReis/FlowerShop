<?php
$page_title = "Gerenciamento de Usuários - Floresça";
include 'header.php';
?>

<div class="main-content">
    <h1>GERENCIAMENTO DE USUÁRIOS</h1>
    
    <div class="card">
        <input type="text" placeholder="BUSCAR USUÁRIOS..." class="search-input">
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>C-001</td>
                    <td>Ana Paula Reis</td>
                    <td>anareis87@icloud.com</td>
                    <td>(47)99656-4298</td>
                    <td>
                        <button class="btn" style="background: #2196F3; color: white;">Editar</button>
                        <button class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="card">
        <h3>Adicionar Novo Usuário</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone">
            </div>
            
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            
            <button type="submit" class="btn btn-primary">SALVAR</button>
        </form>
    </div>
</div>

</body>
</html>