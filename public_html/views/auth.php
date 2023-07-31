
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="/public_html/css/style.css">
</head>
<body>
    <header>
        <h1>Авторизация</h1>
    </header>
    <main>
        <div class="auth-block">
            <form id="form" class="auth-form" action="<?='Auth.php'?>" method="POST">
            <p><?= realpath('Auth.php')?></p>
                <div class="input-block">
                    <div class="text-part">
                       <label for="email">Email</label> 
                    </div>
                    
                    <input type="text" id="email" name="email" class="input" required>
                </div>
                <div class="input-block">
                    <div class="text-part">
                      <label for="password">Пароль</label>  
                    </div>
                    <input type="password" id="password" name="password" class="input" required>
                </div>
                <input type="hidden" name="actionFunc" value="checkData">
                <input class="btn auth-btn submit-btn" type="submit" value="Вход">
            </form>
        </div>
        <a href="<?= "settings.php" ?>">Настройки</a>
    </main>
    <script src="/public_html/js/script.js"></script>
</body>
</html>