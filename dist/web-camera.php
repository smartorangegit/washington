<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Choose Floor</title>
</head>
<body>
    <?php include_once('includes/header.php');?>

    <section class="camera">
        <div class="wrapper">
                <div class="page-top  animate">
                    <div class="page-top__wrapper">
                        <div class="page-top_heading">
                            <h1>Веб камера</h1>
                            <div class="page-top__letter-w">
                            <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 170.1 132.4"><path d="M57.1 132.4L0 0h6.4l51.5 119.2L82 62.8 55.2 0h6.2l24.1 57.1L110.4 0h4.9L88.2 62.7l24.6 57.1L165.4 0h4.7l-57.8 132.4-27.6-63.5-27.6 63.5z"/></svg>
                            </div>
                        </div>
                        <div class="page-top__links">
                            <ul>
                                <li>
                                    <a href="/">Головна</a>
                                </li>
                                <li>
                                    <span class="page-top__line"></span>
                                </li>
                                <li class="page-top__active-link">
                                    <a href="#">Веб камера</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        <div class="wrapper">
            <div class="camera__content">
                <iframe class="camera__video" src="https://www.youtube.com/embed/LYWyG4refiI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <p class="camera__text">Запланированное время завершения строительства: IV квартал 2018 года</p>
                <a href="#" class="camera__button btn">
                    <span class="btn__text">Хід будівництва</span>
                </a>
            </div>
        </div>
    </section>

    <?php include_once('includes/footer.php');?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/document.min.js"></script>
</body>
</html>