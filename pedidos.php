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
    <title>Gerenciamento de Pedidos - Floresça</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>FLORESÇA FLOWER STUDIO</h1>
        <div>
            <span>Olá, <?php echo $_SESSION['usuario']; ?></span>
            <a href="logout.php">Sair</a>
        </div>
    </div>
    
    <div class="sidebar">
        <ul>
            <li><a href="dashboard.php">PAINEL</a></li>
            <li><a href="produtos.php">PRODUTOS</a></li>
            <li class="active"><a href="pedidos.php">PEDIDOS</a></li>
            <li><a href="usuarios.php">USUÁRIOS</a></li>
            <li><a href="relatorios.php">RELATÓRIOS</a></li>
        </ul>
    </div>
    
    <div class="main-content">
        <h1>GERENCIAMENTO DE PEDIDOS</h1>
        
        <div class="stats-container">
            <div class="stat-card">
                <h2>8</h2>
                <p>Pedidos Pendentes</p>
            </div>
            
            <div class="stat-card">
                <h2>15</h2>
                <p>Pedidos Este Mês</p>
            </div>
            
            <div class="stat-card">
                <h2>R$ 3.200</h2>
                <p>Valor Total</p>
            </div>
        </div>
        
        <div class="card">
            <div class="filter-container">
                <input type="text" class="search-input" placeholder="BUSCAR PEDIDOS...">
                <div>
                    <select class="filter-select">
                        <option>Todos os status</option>
                        <option>Pendente</option>
                        <option>Processando</option>
                        <option>Enviado</option>
                        <option>Entregue</option>
                        <option>Cancelado</option>
                    </select>
                    <button class="btn btn-primary">Filtrar</button>
                </div>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Data</th>
                        <th>Valor</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1001</td>
                        <td>Ana Paula Reis</td>
                        <td>10/08/2025</td>
                        <td>R$ 150,00</td>
                        <td><span class="status-badge status-pendente">Pendente</span></td>
                        <td>
                            <button class="btn" style="background: #2196F3; color: white;">Detalhes</button>
                            <button class="btn" style="background: #4CAF50; color: white;">Editar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>#1002</td>
                        <td>Carlos Uchoa</td>
                        <td>10/08/2025</td>
                        <td>R$ 550,00</td>
                        <td><span class="status-badge status-enviado">Enviado</span></td>
                        <td>
                            <button class="btn" style="background: #2196F3; color: white;">Detalhes</button>
                            <button class="btn" style="background: #4CAF50; color: white;">Editar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>#1003</td>
                        <td>Tiago Ricoldi</td>
                        <td>11/08/2025</td>
                        <td>R$ 500,00</td>
                        <td><span class="status-badge status-enviado">Enviado</span></td>
                        <td>
                            <button class="btn" style="background: #2196F3; color: white;">Detalhes</button>
                            <button class="btn" style="background: #4CAF50; color: white;">Editar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>#1004</td>
                        <td>Mariana Silva</td>
                        <td>12/08/2025</td>
                        <td>R$ 320,00</td>
                        <td><span class="status-badge status-entregue">Entregue</span></td>
                        <td>
                            <button class="btn" style="background: #2196F3; color: white;">Detalhes</button>
                            <button class="btn" style="background: #4CAF50; color: white;">Editar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>#1005</td>
                        <td>João Mendonça</td>
                        <td>13/08/2025</td>
                        <td>R$ 180,00</td>
                        <td><span class="status-badge status-processando">Processando</span></td>
                        <td>
                            <button class="btn" style="background: #2196F3; color: white;">Detalhes</button>
                            <button class="btn" style="background: #4CAF50; color: white;">Editar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="card">
            <h3>Detalhes do Pedido #1001</h3>
            <div class="order-details">
                <div>
                    <h4>Informações do Cliente</h4>
                    <p><strong>Nome:</strong> Ana Paula Reis</p>
                    <p><strong>Email:</strong> anareis87@icloud.com</p>
                    <p><strong>Telefone:</strong> (47) 99656-4298</p>
                    <p><strong>Endereço:</strong> Rua das Flores, 123, Centro, São Paulo - SP</p>
                </div>
                
                <div>
                    <h4>Informações do Pedido</h4>
                    <p><strong>Data do Pedido:</strong> 10/08/2025</p>
                    <p><strong>Status:</strong> Pendente</p>
                    <p><strong>Método de Pagamento:</strong> Cartão de Crédito</p>
                    <p><strong>Total:</strong> R$ 150,00</p>
                </div>
            </div>
            
            <div class="order-items">
                <h4>Itens do Pedido</h4>
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Preço Unitário</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Buquê Rosa Vermelha</td>
                            <td>1</td>
                            <td>R$ 85,00</td>
                            <td>R$ 85,00</td>
                        </tr>
                        <tr>
                            <td>Vaso de Cerâmica Pequeno</td>
                            <td>2</td>
                            <td>R$ 32,50</td>
                            <td>R$ 65,00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" style="text-align: right; font-weight: bold;">Total:</td>
                            <td style="font-weight: bold;">R$ 150,00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
            <div style="margin-top: 1.5rem;">
                <h4>Alterar Status</h4>
                <div style="display: flex; gap: 10px; margin-top: 10px;">
                    <select style="padding: 10px; border-radius: 6px;">
                        <option>Pendente</option>
                        <option>Processando</option>
                        <option>Enviado</option>
                        <option>Entregue</option>
                        <option>Cancelado</option>
                    </select>
                    <button class="btn btn-primary">Atualizar Status</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>