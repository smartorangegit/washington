<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.min.css">
    <title>Choose Floor</title>
</head>
<body>
    <?php include_once('includes/header.php');?>

    <section class="choose-floor">
            <div class="page-top page-top_choose-floor animate">
                <div class="page-top__wrapper">
                    <div class="page-top_heading">
                        <h1>Обрати поверх</h1>
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
                                <a href="#">Обрати поверх</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- page-top -->
            <div class="choose-floor__content wrapper">

                <div class="choose-floor__left">
                    <div class="compass">
                        <img src="img/choose-floor/compass.png" alt="Choose floor compass image">
                        <span class="compass__direction compass__direction_north">Пн</span>
                        <span class="compass__direction compass__direction_east">Сх</span>
                        <span class="compass__direction compass__direction_south">Пд</span>
                        <span class="compass__direction compass__direction_west">Зх</span>
                    </div>
                    <div class="choose-floor_arrow">
                        <span>Оберіть потрібний поверх</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" height="11" viewBox="0 0 44 11"><defs><path id="fk3ga" d="M686 443v1h-1v1h-1v-1h-42v-1h42v-1h1v1zm-3 3v-1h1v1zm-1 1v-1h1v1zm-1 1v-1h1v1zm2-6v-1h1v1zm-1-1v-1h1v1zm-1-1v-1h1v1zm-1-1v-1h1v1zm0 10v-1h1v1z"/></defs><g><g transform="translate(-642 -438)"><use fill="#525249" xlink:href="#fk3ga"/></g></g></svg>
                        </span>
                    </div>
                    <div class="choose-floor__rooms-btns">
                        <ul>
                            <li class="choose-floor__rooms-btn"><a href="#">1 кімнатні</a></li>
                            <li class="choose-floor__rooms-btn"><a href="#">2 кімнатні</a></li>
                            <li class="choose-floor__rooms-btn"><a href="#">3 кімнатні</a></li>
                        </ul>
                    </div>
                </div>

                <div class="choose-floor__center">
                    <img src="img/choose-floor/kinda-svg.jpg" alt="SVG">
                </div>

                <div class="choose-floor__right">
                    <div class="filter">
                        <a href="#" class="filter-btn btn">
                            <span class="filter__icon">
                                <div class="filter-line"><span class="filter__dot filter__dot_1"></span></div>
                                <div class="filter-line"><span class="filter__dot filter__dot_2"></span></div>
                                <div class="filter-line"><span class="filter__dot filter__dot_3"></span></div>
                            </span>
                            <span class="btn__text">Фільтр</span>
                        </a>
                    </div>
                    <div class="choose-floor__info choose-floor__info_floor-number">
                        <div class="choose-floor__info-text">Поверх</div>
                        <div class="choose-floor__info-number">17</div>
                    </div>
                    <div class="choose-floor__info choose-floor__info_apartments-number">
                        <div class="choose-floor__info-text">Кількість квартир</div>
                        <div class="choose-floor__info-number">25</div>
                    </div>
                    <div>
                        <a href="#" class="choose-floor__price-btn btn"><span class="btn__text">Дізнатися ціну</span></a>
                    </div>
                </div>
            </div>

    </section>

    <?php include_once('includes/footer.php');?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
</body>
</html>