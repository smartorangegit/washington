<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>News</title>
</head>
<body>
    <?php include_once('includes/header.php');?>

        <section class="select-apartmens">
            <div class="wrapper">
                <div class="page-top select-apartmens__page-top animate">
                    <div class="page-top__wrapper">
                        <div class="page-top_heading">
                            <h1>Новини</h1>
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
                                    <a href="">Обрати поверх</a>
                                </li>
                                <li>
                                    <span class="page-top__line"></span>
                                </li>
                                <li class="page-top__active-link">
                                    <a href="#">Новини</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
            
            <div class="select-apartmens-wrap select-apartmens-wrap_height_auto">
                <div class="select-apartmens-top">
                    <a href="#" class="select-button btn">
                        <img src="img/select-appartmets/long-arrow.png" alt="icon" class="select-button__icon select-button__icon_transform">
                        <span class="select-button__text btn__text">Обрати квартиру</span>
                    </a>
                
                    <a href="#" class="select-button btn">
                        <img src="img/select-appartmets/filter.png" alt="icon" class="select-button__icon select-button__icon_scale">
                        <span class="select-button__text btn__text">Фільтр</span>
                    </a>
                </div>

                <div class="select-apartmens-middle select-apartmens-middle_margin-bottom">
                    <div class="flat__image-wrap">
                        <img src="img/flat-plan/flat-1.png" alt="" class="flat__image">
                    </div>

                    <div class="flat-parameters-wrap">
                        <!-- <p class="flat-parameters__heading">
                            Параметри квартири
                        </p> -->
                        <div class="flat-parameters__heading">
                            <h1> Параметри квартири</h1>
                            <div class="flat-parameters__letter-w">
                                <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 170.1 132.4"><path d="M57.1 132.4L0 0h6.4l51.5 119.2L82 62.8 55.2 0h6.2l24.1 57.1L110.4 0h4.9L88.2 62.7l24.6 57.1L165.4 0h4.7l-57.8 132.4-27.6-63.5-27.6 63.5z"/></svg>
                            </div>
                        </div>
                        <ul class="flat-parameters-list">
                            <li class="flat-parameters-list__item">
                                <p class="flat-parameters-list__text">
                                    Загальна: 64.89 м<span class="exponent">2</span>
                                </p>
                            </li>
                            <li class="flat-parameters-list__item">
                                <p class="flat-parameters-list__text">
                                    Житлова: 36.27 м<span class="exponent">2</span>
                                </p>
                            </li>
                            <li class="flat-parameters-list__item">
                                <p class="flat-parameters-list__text">
                                    Передпокій: 9.76 м<span class="exponent">2</span>
                                </p>
                            </li>
                            <li class="flat-parameters-list__item">
                                <p class="flat-parameters-list__text">
                                    Кухня: 11.31 м<span class="exponent">2</span>
                                </p>
                            </li>
                            <li class="flat-parameters-list__item">
                                <p class="flat-parameters-list__text"></p>
                            </li>
                            <li class="flat-parameters-list__item">
                                <p class="flat-parameters-list__text">
                                    Вітальня: 17.24 м<span class="exponent">2</span>
                                </p>
                            </li>
                            <li class="flat-parameters-list__item">
                                <p class="flat-parameters-list__text">
                                    Спальня: 19.03 м<span class="exponent">2</span>
                                </p>
                            </li>
                            <li class="flat-parameters-list__item">
                                <p class="flat-parameters-list__text">
                                    Санвузол: 3.01 м<span class="exponent">2</span>
                                </p>
                            </li>
                            <li class="flat-parameters-list__item">
                                <p class="flat-parameters-list__text">
                                    Ванна: 4.54 м<span class="exponent">2</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="select-apartmens-bottom">
                    <div class="apartmens-plan">
                        <p class="apartmens-plan__text">План поверху</p>
                        <div class="apartmens-plan-image-wrap">
                            <? include_once('includes/houses/2.php'); ?>
                        </div>   
                    </div>
                    <a href="#" class="select-apartmens-bottom__button btn">
                        <img src="img/flat-plan/pdf-icon.png" alt="icon" class="select-apartmens-bottom__button-icon">
                        <span class="btn__text">Завантажити PDF</span>
                    </a>
                    <a href="#" class="select-apartmens-bottom__button btn">
                        <span class="btn__text">Дізнатися ціну</span>
                    </a>
                </div>
                <img src="img/select-appartmets/compas.png" alt="image" class="select-apartmens__image">
            </div>
        </section>
 

        
    <?php include_once('includes/footer.php');?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/select-appartmens.min.js"></script>
</body>
</html>