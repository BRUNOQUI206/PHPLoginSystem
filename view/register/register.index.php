<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.style.css">
    <link rel="stylesheet" href="../../style.css">
    <title>Cadastro Page</title>
</head>

<body>
    <?php include('../../components/header/header.index.php'); ?>
    <section class="register-page">
        <div class="container">
            <h1 class="register-title">Cadastro</h1>
            <form action="../../api/process_register.php" method="post" class="register-form">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="btn">Cadastrar</button>
            </form>
        </div>
    </section>
    <?php include('../../components/footer/footer.index.php'); ?>
</body>

</html>
