<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Настройки</title>
    <link rel="stylesheet" href="/public_html/css/style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            
                <a  href="auth.php">
                    <div class="profile-block">
                        <img src="" alt="">
                        <p>Иванов Иван</p>
                    </div>
                </a>
                <nav class="nav-block">
                    <ul class="nav-menu">
                        <li class="nav-link">
                            <a href="<?= "settings.php" ?>">Настройки</a>
                        </li>
                        <li class="nav-link">
                            <a href="<?= "items.php" ?>">Товары</a>
                        </li>
                        <li class="nav-link"> 
                            <a href="<?= "users.php" ?>">Пользователи</a>
                        </li>
                    </ul>
                </nav>
        </header>
        <div class="bottom-line"></div>
        <main>
            <div class="settings-block">
                <form action="" class="settings-form">
                    <div class="input-block">
                        <label for="ln">Access token</label>
                        <input type="text" id="" class="input" />
                    </div>
                    <div class="input-block">
                        <label for="remains">Передавать остатки</label>
                        <input type="checkbox" name="remains" id="remains">
                    </div>
                    <div class="input-block">
                        <label for="prices">Передавать цены</label>
                        <input type="checkbox" name="prices" id="prices">
                    </div>
                    <input class="btn submit-btn save-btn" type="submit" value="Сохранить">
                </form>
            </div>  
        </main>  
    </div>  
</body>
</html>