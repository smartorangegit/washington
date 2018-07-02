<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>404</title>
</head>
<body>
    <?php include_once('includes/header.php');?>
    <section class="not-found">
        <div class="not-found-content">
            <a class="not-found-button">
                <span class="not-found-button__icon-wrap not-found-button__icon-wrap_left">
                    <img src="img/404/404-arrow.png" class="not-found-button__icon not-found-button__icon_revers">
                </span>
                <span class="not-found-button__text">
                    Назад
                </span>
            </a>
            <span class="not-found__text">
               Вибачте, сторінку не знайдено
            </span>
            <a class="not-found-button">
                <span class="not-found-button__text">
                    На головну
                </span>
                <span class="not-found-button__icon-wrap not-found-button__icon-wrap_right">
                    <img src="img/404/404-arrow.png">
                </span>
            </a>
            <!-- <img src="img/404/404.png" class="not-found__image"> -->
        </div>   
    </section>
    <?php include_once('includes/footer.php');?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/architecture.min.js"></script>
</body>
</html>