<?php
session_start();
// Verificar se está logado para páginas que requerem autenticação
$requires_auth = true;
if (basename($_SERVER['PHP_SELF']) == 'index.php' || basename($_SERVER['PHP_SELF']) == 'login.php') {
    $requires_auth = false;
}

if ($requires_auth && !isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Floresça Flower Studio'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if ($requires_auth): ?>
    <div class="header">
        <h1>FLORESÇA FLOWER STUDIO</h1>
        <div>
            <span>Olá, <?php echo $_SESSION['usuario']; ?></span>
            <a href="logout.php">Sair</a>
        </div>
    </div>
    
    <div class="sidebar">
        <ul>
            <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
                <a href="dashboard.php">PAINEL</a>
            </li>
            <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'produtos.php' ? 'active' : ''; ?>">
                <a href="produtos.php">PRODUTOS</a>
            </li>
            <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'pedidos.php' ? 'active' : ''; ?>">
                <a href="pedidos.php">PEDIDOS</a>
            </li>
            <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'usuarios.php' ? 'active' : ''; ?>">
                <a href="usuarios.php">USUÁRIOS</a>
            </li>
            <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'relatorios.php' ? 'active' : ''; ?>">
                <a href="relatorios.php">RELATÓRIOS</a>
            </li>
        </ul>
    </div>
    <?php endif; ?>