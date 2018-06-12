<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.min.css">
    <title>Filter</title>
</head>
<body>
    <?php include_once('includes/header.php');?>

    <section class="filter">
        <div class="page-top page-top_filter animate">
            <div class="page-top__wrapper">
                <div class="page-top_heading">
                    <h1>Фільтр</h1>
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
                            <a href="#">Фільтр</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- page-top -->

        <div class="filter__controls wrapper">

        <!-- Filter range price total - pt -->
            <div class="filter__slider filter__slider_pt js-filter__slider_pt">
                <div class="filter__texts">
                    <input class="filter__text js-filter__text_min" type="text"/>
                    <input class="filter__text js-filter__text_max" type="text"/>
                </div>
                <div class="filter__ranges filter__ranges_pt">
                    <?php /*Place PHP values here*/?>
                        <input type="range" min="500" max="5000000" class="filter__hidden-values filter__hidden-values_pt js-filter__hidden-values">
                    <?php /*Place PHP values here*/?>
                    <input class="filter__range filter__range_pt js-filter__range" type="text">
                </div>
            </div>

        <!-- Filter range total area - ta -->
            <div class="filter__slider filter__slider_ta js-filter__slider_ta">
                <div class="filter__texts">
                    <input class="filter__text js-filter__text_min" type="text"/>
                    <input class="filter__text js-filter__text_max" type="text"/>
                </div>
                <div class="filter__ranges filter__ranges_ta">
                    <?php /*Place PHP values here*/?>
                        <input type="range" min="5" max="100" class="filter__hidden-values filter__hidden-values_ta js-filter__hidden-values">
                    <?php /*Place PHP values here*/?>
                    <input class="filter__range filter__range_ta js-filter__range" type="text">
                </div>
            </div>

        </div>

        <div class="filter__results wrapper">
            <ul>
                <li 
                    data-pricetotal="10000"
                    data-totalarea="40"
                    data-rooms="1"
                    class="filter__result js-filter__result">
                    <a href="#">
                        <div>
                            <div>Result 1</div>
                            <div>Price total 10000</div>
                            <div>Total area 40</div>
                            <div>Rooms 1</div>
                        </div>
                    </a>
                </li>
                <li 
                    data-pricetotal="20000"
                    data-totalarea="20"
                    data-rooms="2"
                    class="filter__result js-filter__result">
                    <a href="#">
                        <div >
                            <div>Result 2</div>
                            <div>Price total 20000</div>
                            <div>Total area 20</div>
                            <div>Rooms 2</div>
                        </div>
                    </a>
                </li>
                <li 
                    data-pricetotal="60000"
                    data-totalarea="80"
                    data-rooms="3"
                    class="filter__result js-filter__result">
                    <a href="#">
                        <div >
                            <div>Result 3</div>
                            <div>Price total 60000</div>
                            <div>Total area 80</div>
                            <div>Rooms 3</div>
                        </div>
                    </a>
                </li>
                <li
                    data-pricetotal="5000"
                    data-totalarea="10"
                    data-rooms="1"
                    class="filter__result js-filter__result">
                    <a href="#">
                        <div>
                            <div>Result 4</div>
                            <div>Price total 5000</div>
                            <div>Total area 10</div>
                            <div>Rooms 1</div>
                        </div>
                    </a>
                </li>
                <li 
                    data-pricetotal="2000"
                    data-totalarea="90"
                    data-rooms="4"
                    class="filter__result js-filter__result">
                    <a href="#">
                        <div>
                            <div>Result 5</div>
                            <div>Price total 20000</div>
                            <div>Total area 90</div>
                            <div>Rooms 4</div>
                        </div>
                    </a>
                </li>
                <li 
                    data-pricetotal="300000"
                    data-totalarea="50"
                    data-rooms="2"
                    class="filter__result js-filter__result">
                    <a href="#">
                        <div>
                            <div>Result 6</div>
                            <div>Price total 300000</div>
                            <div>Total area 50</div>
                            <div>Rooms 2</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

                 

    </section>

    <?php include_once('includes/footer.php');?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/filter.min.js"></script>
</body>
</html>