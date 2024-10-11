<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login/login.index.php");
    exit;
}

include('../../data/database.php');

$sql = "SELECT id, nome, email FROM usuarios";
$stmt = $pdo->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="usuarios.style.css">
    <title>Lista de Usuários</title>
</head>

<body>
    <?php include('../../components/header/header.index.php'); ?>
    <section class="users-page">
        <div class="container">
            <h1>Usuários Cadastrados</h1>
            <table class="users-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($usuario['id']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <?php include('../../components/footer/footer.index.php'); ?>
</body>

</html>
