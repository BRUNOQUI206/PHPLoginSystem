<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login/login.index.php");
    exit;
}

include('../../data/database.php');

$sql = "SELECT nome, email FROM usuarios WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $_SESSION['user_id']);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    echo "Usuário não encontrado!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="perfil.style.css">
    <title>Perfil do Usuário</title>
</head>
<body>
    <?php include('../../components/header/header.index.php'); ?>
    <section class="profile-page">
        <div class="container">
            <h1>Perfil do Usuário</h1>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($usuario['nome']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($usuario['email']); ?></p>
            <a href="../usuarios/usuarios.index.php" class="btn">Voltar para Lista de Usuários</a>
        </div>
    </section>
    <?php include('../../components/footer/footer.index.php'); ?>
</body>
</html>
