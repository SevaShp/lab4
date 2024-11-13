<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Ответ на обращение </title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="main-menu">
                <a href="index.php" class="aut">Назад</a>
            </nav>
        </div>
    </header>
    <div class="response-container">
        <h1>Спасибо за ваше обращение!</h1>
        <p><strong>ФИО:</strong> <?php echo ($_POST['FIO']); ?></p>
        <p><strong>Email:</strong> <?php echo ($_POST['email']); ?></p>
        <p><strong>Откуда узнали о нас:</strong> 
            <?php 
                $sources = ['ad' => 'Реклама', 'advised' => 'Посоветовали', 'irl' => 'Лично знаком'];
                echo isset($_POST['source']) ? $sources[$_POST['source']] : 'Не указано'; 
            ?>
        </p>
        <p><strong>Тип обращения:</strong> 
            <?php 
                $categories = ['predlosh' => 'Предложение', 'jaloba' => 'Жалоба'];
                echo isset($_POST['category']) ? $categories[$_POST['category']] : 'Не указано'; 
            ?>
        </p>
        <p><strong>Текст обращения:</strong> <?php echo ($_POST['message']); ?></p>
        
        <p><strong>Название прикрепленного файла:</strong> 
            <?php echo isset($_FILES['file']['name']) && $_FILES['file']['name'] ? ($_FILES['file']['name']) : 'Файл не прикреплен'; ?>
        </p>

        <!-- Кнопка для возврата к форме с сохранением данных -->
        <form action="index.php" method="post">
            <input type="hidden" name="FIO" value="<?php echo ($_POST['FIO']); ?>">
            <input type="hidden" name="email" value="<?php echo ($_POST['email']); ?>">
            <input type="hidden" name="source" value="<?php echo ($_POST['source']); ?>">
            <input type="hidden" name="category" value="<?php echo ($_POST['category']); ?>">
            <input type="hidden" name="message" value="<?php echo ($_POST['message']); ?>">
            <input type="submit" class="botton" value="Заполнить снова">
        </form>
    </div>
</body>
</html>