<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.style.css">
    <link rel="stylesheet" href="../../style.css">
    <title>Home Page</title>
</head>

<body>
    <?php include('../../components/header/header.index.php'); ?>
    <section class="home-page">
        <div class="container">
            <h1 class="home-title">Bem-vindo ao Nosso Site</h1>
            <p class="home-description">Aqui você pode se cadastrar e ter acesso a recursos exclusivos. Não perca essa oportunidade!</p>
            <a href="../register/register.index.php" class="btn">Cadastre-se Agora</a>
        </div>
    </section>
    <?php include('../../components/footer/footer.index.php'); ?>
</body>

</html>