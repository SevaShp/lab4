<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title> Домашняя страничка </title>
        <link rel="stylesheet" href="styles/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    </head>
<body>
    <header class="header">
        <div class="container">
        <nav class="main-menu">
             <?php
                echo '<a href="index.php"';
                ?>
             <?php
             
                echo ' >Главная</a>';
                ?>
                
                <?php
                $name = 'Обратная связь';
                $link = 'form.php';
                $current_page = true;
                ?>

                <a href="<?php echo $link; ?>" <?php if ($current_page)
                       echo ' class="aut"'; ?>>
                    <?php echo $name; ?>
                </a>
                <?php
                $name = 'Авторизация';
                $link = 'auth.php';
                $current_page = true;
                ?>
                <a href="<?php echo $link; ?>" <?php if ($current_page)
                       echo ' class="text"'; ?>>
                    <?php echo $name; ?>
                </a>
            </nav>
        </div>
    </header>
    <div class="auth-form-container">
    
        <form action="https://httpbin.org/post" method="post" enctype="multipart/form-data">
            <p class="form-label">Обратная связь</p>
            <div class="form-group">
                <label for="FIO" class="form-label">ФИО</label>
                <input id="FIO "type="text" name="FIO" placeholder="Имя Фамилия Отчество" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Почта</label>
                <input id="email"type="text" name="email" required>
            </div>

            <div class="form-group">
            <p class="form-label">Откуда узнали о нас</p>
                <input type="radio" name="source" id="ad" value="ad">
                <label for="ad">Реклама</label>
                <input type="radio" name="source" id="advised" value="advised">
                <label for="advised">Посоветовали</label>
                <input type="radio" name="source" id="irl" value="irl" checked>
                <label for="irl">Лично знаком</label>
            
            </div>
            <div class="form-group">
                <label for="category" class="form-label">Тип обращения</label>
                <select name="category" id="category">
                    <option value="predlosh">Предложение</option>
                    <option value="jaloba">Жалоба</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Обращение</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Введите сообщение"></textarea>
            </div>
            <div class="form-group">
                <label for="files" class="form-label">Вложение</label>
                <input type="file">
            </div>
            <div class="form-group">
                <input type="checkbox" name="agree" id="agree" required>
                <label for="agree">Согласен на обработку персональных данных</label>
            </div>
            <input type="submit" class="botton" value="Отправить">
        </form>
    </div>
</body>