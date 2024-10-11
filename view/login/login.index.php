<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.style.css">
    <link rel="stylesheet" href="../../style.css">
    <title>Login Page</title>
</head>

<body>
    <?php include('../../components/header/header.index.php'); ?>
    <section class="login-page">
        <div class="container">
            <h1 class="login-title">Login</h1>
            <form action="../../api/process_login.php" method="post" class="login-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="btn">Entrar</button>
            </form>
        </div>
    </section>
    <?php include('../../components/footer/footer.index.php'); ?>
</body>

</html>
