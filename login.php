<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">

    <title>LOGIN</title>
</head>

<body>
    <main id="container">
        <form id="login_form">
            <div id="form_header">
                <h1>Login</h1>
            </div>

            <div id="inputs">
                <div class="input-box">
                    <label for="name">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="name" name="name">
                        </div>
                    </label>
                </div>

                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>

                <div class="input-box">
                    <label for="password">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="password" name="password">
                        </div>
                    </label>

                    <div id="forgot_password">
                        <a href="formulario.php">
                            não tem cadastro ?
                        </a>
                    </div>
                </div>
            </div>

            <button type="submit" id="login_button">
                Login
            </button>
        </form>
    </main>

    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>