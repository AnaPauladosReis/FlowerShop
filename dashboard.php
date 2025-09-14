<?php
$page_title = "Painel de Controle - Floresça";
include 'header.php';
?>

<div class="main-content">
    <h1>PAINEL DE CONTROLE</h1>
    
    <div class="stats-container">
        <div class="stat-card">
            <h2>R$ 1.200</h2>
            <p>Vendas Hoje</p>
            <small>comparado ao dia anterior</small>
        </div>
        
        <div class="stat-card">
            <h2>8</h2>
            <p>Pedidos Pendentes</p>
            <small>pedidos aguardando envio</small>
        </div>
        
        <div class="stat-card">
            <h2>3</h2>
            <p>Estoque Crítico</p>
            <small>produtos em baixo estoque</small>
        </div>
    </div>
    
    <div class="card">
        <h3>Vendas Recentes</h3>
        <table>
            <thead>
                <tr>
                    <th>ID do Pedido</th>
                    <th>Cliente</th>
                    <th>Data</th>
                    <th>Valor</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#1001</td>
                    <td>Ana Paula Reis</td>
                    <td>10/08/2025</td>
                    <td>R$150</td>
                    <td><span class="status-badge status-pendente">pendente</span></td>
                </tr>
                <tr>
                    <td>#1002</td>
                    <td>Carlos Uchoa</td>
                    <td>10/08/2025</td>
                    <td>R$550</td>
                    <td><span class="status-badge status-enviado">enviado</span></td>
                </tr>
                <tr>
                    <td>#1003</td>
                    <td>Tiago Ricoldi</td>
                    <td>11/08/2025</td>
                    <td>R$500</td>
                    <td><span class="status-badge status-enviado">enviado</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>