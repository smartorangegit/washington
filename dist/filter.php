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
            <div>
                <!-- Filter range price total - pt -->
                <div class="filter__slider filter__slider_pt js-filter__slider_pt">
                    <h5 class="filter__range_heading">Вартість грн:</h5>
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
                    <h5 class="filter__range_heading">Загальна площа м<sup>2</sup>:</h5>
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

            <!-- Rooms checkboxes -->
            <div class="filter__rooms js-filter__rooms">
                <h5 class="filter__rooms_heading">К-сть Кімнат:</h5>
                <div class="filter__room-checkbox filter__room-checkbox_1">
                    <input id="filter-room_1" type="checkbox" value="1">
                    <label for="filter-room_1">1</label>
                </div>
                <div class="filter__room-checkbox filter__room-checkbox_2">
                    <input id="filter-room_2" type="checkbox" value="2">
                    <label for="filter-room_2">2</label>
                </div>
                <div class="filter__room-checkbox filter__room-checkbox_3">
                    <input id="filter-room_3" type="checkbox" value="3">
                    <label for="filter-room_3">3</label>
                </div>
                <div class="filter__room-checkbox filter__room-checkbox_4">
                    <input id="filter-room_4" type="checkbox" value="4">
                    <label for="filter-room_4">4</label>
                </div>
            </div>

            <div>

                <!-- Filter range price meter - pm -->
                <div class="filter__slider filter__slider_pm js-filter__slider_pm">
                    <h5 class="filter__range_heading">Ціна за м<sup>2</sup>:</h5>
                    <div class="filter__texts">
                        <input class="filter__text js-filter__text_min" type="text"/>
                        <input class="filter__text js-filter__text_max" type="text"/>
                    </div>
                    <div class="filter__ranges filter__ranges_pt">
                        <?php /*Place PHP values here*/?>
                            <input type="range" min="7000" max="50000" class="filter__hidden-values filter__hidden-values_pt js-filter__hidden-values">
                        <?php /*Place PHP values here*/?>
                        <input class="filter__range filter__range_pm js-filter__range" type="text">
                    </div>
                </div>

                <!-- Filter range living aera - la -->
                <div class="filter__slider filter__slider_la js-filter__slider_la">
                    <h5 class="filter__range_heading">Житлова лоща м<sup>2</sup>:</h5>
                    <div class="filter__texts">
                        <input class="filter__text js-filter__text_min" type="text"/>
                        <input class="filter__text js-filter__text_max" type="text"/>
                    </div>
                    <div class="filter__ranges filter__ranges_la">
                        <?php /*Place PHP values here*/?>
                            <input type="range" min="12" max="154" class="filter__hidden-values filter__hidden-values_la js-filter__hidden-values">
                        <?php /*Place PHP values here*/?>
                        <input class="filter__range filter__range_la js-filter__range" type="text">
                    </div>
                </div>

            </div>

            <div>
                За вашими параметрами є <span class="filter__results-found-numb"></span> квартир
            </div>

            <a href="#" class="filter__btn btn js-filter__btn">Шукати</a>

            <a href="#" class="filter__reset js-filter__reset">Зкинути параметри</a>

        </div>

        <div class="filter__results wrapper">
            <ul>
                <li 
                    data-pricetotal="10000"
                    data-totalarea="40"
                    data-rooms="1"
                    data-pricemeter="11000"
                    data-livingarea="20"
                    class="filter__result js-filter__result filter__result_hidden">
                    <a href="#">
                        <div>
                            <div>Result 1</div>
                            <div>Price total 10000</div>
                            <div>Total area 40</div>
                            <div>Rooms 1</div>
                            <div>Price meter 11000</div>
                            <div>Living area 20</div>
                        </div>
                    </a>
                </li>
                <li 
                    data-pricetotal="20000"
                    data-totalarea="20"
                    data-rooms="2"
                    data-pricemeter="12000"
                    data-livingarea="30"
                    class="filter__result js-filter__result filter__result_hidden">
                    <a href="#">
                        <div >
                            <div>Result 2</div>
                            <div>Price total 20000</div>
                            <div>Total area 20</div>
                            <div>Rooms 2</div>
                            <div>Price meter 12000</div>
                            <div>Living area 30</div>
                        </div>
                    </a>
                </li>
                <li 
                    data-pricetotal="60000"
                    data-totalarea="80"
                    data-rooms="3"
                    data-pricemeter="13000"
                    data-livingarea="40"
                    class="filter__result js-filter__result filter__result_hidden">
                    <a href="#">
                        <div >
                            <div>Result 3</div>
                            <div>Price total 60000</div>
                            <div>Total area 80</div>
                            <div>Rooms 3</div>
                            <div>Price meter 13000</div>
                            <div>Living area 40</div>
                        </div>
                    </a>
                </li>
                <li
                    data-pricetotal="5000"
                    data-totalarea="10"
                    data-rooms="1"
                    data-pricemeter="14000"
                    data-livingarea="50"
                    class="filter__result js-filter__result filter__result_hidden">
                    <a href="#">
                        <div>
                            <div>Result 4</div>
                            <div>Price total 5000</div>
                            <div>Total area 10</div>
                            <div>Rooms 1</div>
                            <div>Price meter 14000</div>
                            <div>Living area 50</div>
                        </div>
                    </a>
                </li>
                <li 
                    data-pricetotal="2000"
                    data-totalarea="90"
                    data-rooms="4"
                    data-pricemeter="15000"
                    data-livingarea="60"
                    class="filter__result js-filter__result filter__result_hidden">
                    <a href="#">
                        <div>
                            <div>Result 5</div>
                            <div>Price total 20000</div>
                            <div>Total area 90</div>
                            <div>Rooms 4</div>
                            <div>Price meter 15000</div>
                            <div>Living area 60</div>
                        </div>
                    </a>
                </li>
                <li 
                    data-pricetotal="300000"
                    data-totalarea="50"
                    data-rooms="2"
                    data-pricemeter="16000"
                    data-livingarea="70"
                    class="filter__result js-filter__result filter__result_hidden">
                    <a href="#">
                        <div>
                            <div>Result 6</div>
                            <div>Price total 300000</div>
                            <div>Total area 50</div>
                            <div>Rooms 2</div>
                            <div>Price meter 16000</div>
                            <div>Living area 70</div>
                        </div>
                    </a>
                </li>
            </ul>

                    <a href="#" class="filter__more-results-btn btn js-filter__more-results">Дивитися більше планувань</a>

        </div>


                 

    </section>

    <?php include_once('includes/footer.php');?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/filter.min.js"></script>
</body>
</html>