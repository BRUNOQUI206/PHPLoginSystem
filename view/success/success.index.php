<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="success.style.css">
    <link rel="stylesheet" href="../../style.css">
    <title>Sucesso no Cadastro</title>
</head>

<body>
    <?php include('../../components/header/header.index.php'); ?>
    <section class="success-page">
        <div class="container">
            <h1 class="success-title">Cadastro Realizado com Sucesso!</h1>
            <p class="success-description">Parabéns, seu cadastro foi concluído com sucesso. Agora você já pode fazer login na sua conta e aproveitar nossos serviços.</p>
            <a href="../home/home.index.php" class="btn">Voltar para Home</a>
            <a href="../login/login.index.php" class="btn btn-login">Fazer Login</a>
        </div>
    </section>
    <?php include('../../components/footer/footer.index.php'); ?>
</body>

</html>
