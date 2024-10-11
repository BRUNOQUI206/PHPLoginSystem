<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../components/header/header.style.css">
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header class="site-header">
        <nav class="main-nav">
            <a href="../../view/home/home.index.php" class="nav-link">Home</a>
            <a href="../../view/about/about.index.php" class="nav-link">Sobre</a>
            <a href="../../view/register/register.index.php" class="nav-link">Cadastro</a>
            <a href="../../view/login/login.index.php" class="nav-link">Login</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="../../view/perfil/perfil.index.php" class="nav-link">Perfil</a>
            <?php endif; ?>
        </nav>
    </header>
</body>
</html>
