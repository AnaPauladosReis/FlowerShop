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
    <title>Relatórios - Floresça</title>
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
            <li><a href="pedidos.php">PEDIDOS</a></li>
            <li><a href="usuarios.php">USUÁRIOS</a></li>
            <li class="active"><a href="relatorios.php">RELATÓRIOS</a></li>
        </ul>
    </div>
    
    <div class="main-content">
        <h1>RELATÓRIOS E ESTATÍSTICAS</h1>
        
        <div class="report-filters">
            <div class="form-group">
                <label for="data-inicio">Data Início</label>
                <input type="date" id="data-inicio" value="2025-08-01">
            </div>
            
            <div class="form-group">
                <label for="data-fim">Data Fim</label>
                <input type="date" id="data-fim" value="2025-08-15">
            </div>
            
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select id="categoria">
                    <option>Todas as Categorias</option>
                    <option>Buquês</option>
                    <option>Plantas</option>
                    <option>Vasos</option>
                    <option>Arranjos</option>
                </select>
            </div>
            
            <div class="form-group" style="display: flex; align-items: flex-end;">
                <button class="btn btn-primary" style="height: 42px;">Gerar Relatório</button>
            </div>
        </div>
        
        <div class="stats-container">
            <div class="stat-card">
                <h2>R$ 8.200</h2>
                <p>Total de Vendas</p>
                <small>período: 01/08/2025 - 15/08/2025</small>
            </div>
            
            <div class="stat-card">
                <h2>155</h2>
                <p>Total de Pedidos</p>
                <small>período: 01/08/2025 - 15/08/2025</small>
            </div>
            
            <div class="stat-card">
                <h2>25</h2>
                <p>Novos Clientes</p>
                <small>período: 01/08/2025 - 15/08/2025</small>
            </div>
        </div>
        
        <div class="report-card">
            <h3>Vendas por Mês</h3>
            <div class="chart-container">
                Gráfico de Vendas Mensais (Área para implementação de gráficos com Chart.js ou similar)
            </div>
            
            <div class="report-summary">
                <div class="summary-item">
                    <h4>R$ 3.500</h4>
                    <p>Vendas em Agosto</p>
                </div>
                <div class="summary-item">
                    <h4>R$ 4.200</h4>
                    <p>Vendas em Julho</p>
                </div>
                <div class="summary-item">
                    <h4>+19%</h4>
                    <p>Crescimento</p>
                </div>
            </div>
        </div>
        
        <div class="report-card">
            <h3>Produtos Mais Vendidos</h3>
            <div class="chart-container">
                Gráfico de Produtos Mais Vendidos (Área para implementação de gráficos)
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade Vendida</th>
                        <th>Valor Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Buquê Rosa Vermelha</td>
                        <td>45 unidades</td>
                        <td>R$ 3.825,00</td>
                    </tr>
                    <tr>
                        <td>Monstera Deliciosa</td>
                        <td>32 unidades</td>
                        <td>R$ 2.528,00</td>
                    </tr>
                    <tr>
                        <td>Vaso Carolina Haveroth</td>
                        <td>18 unidades</td>
                        <td>R$ 11.700,00</td>
                    </tr>
                    <tr>
                        <td>Orquídea Phalaenopsis</td>
                        <td>15 unidades</td>
                        <td>R$ 1.125,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="report-card">
            <h3>Clientes que Mais Compram</h3>
            <table>
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Total de Pedidos</th>
                        <th>Valor Total</th>
                        <th>Última Compra</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ana Paula Reis</td>
                        <td>8 pedidos</td>
                        <td>R$ 1.850,00</td>
                        <td>10/08/2025</td>
                    </tr>
                    <tr>
                        <td>Carlos Uchoa</td>
                        <td>6 pedidos</td>
                        <td>R$ 2.350,00</td>
                        <td>10/08/2025</td>
                    </tr>
                    <tr>
                        <td>Tiago Ricoldi</td>
                        <td>5 pedidos</td>
                        <td>R$ 1.500,00</td>
                        <td>11/08/2025</td>
                    </tr>
                    <tr>
                        <td>Mariana Silva</td>
                        <td>4 pedidos</td>
                        <td>R$ 980,00</td>
                        <td>12/08/2025</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="card">
            <h3>Exportar Relatórios</h3>
            <div style="display: flex; gap: 15px; margin-top: 1rem;">
                <button class="btn btn-primary">Exportar para Excel</button>
                <button class="btn btn-secondary">Exportar para PDF</button>
                <button class="btn" style="background: #607D8B; color: white;">Imprimir Relatório</button>
            </div>
        </div>
    </div>
</body>
</html>