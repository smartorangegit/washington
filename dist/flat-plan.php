<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>flat</title>
</head>
<body>
    <?php
    $floor = $_GET['floor'];

    function app($floor){
        $apps[1] =  get_field('apartment', 194); /*только этот этаж правильный*/
        /*$apps[4] =  get_field('apartment', 59);
        $apps[5] =  get_field('apartment', 89);
        $apps[6] =  get_field('apartment', 93);
        $apps[7] =  get_field('apartment', 97);
        $apps[8] =  get_field('apartment', 240);
        $apps[9] =  get_field('apartment', 244);
        $apps[10] =  get_field('apartment', 248);

        $apps[11] =  get_field('apartment', 252);
        $apps[12] =  get_field('apartment', 256);
        $apps[13] =  get_field('apartment', 260);
        $apps[14] =  get_field('apartment', 264);
        $apps[15] =  get_field('apartment', 268);
        $apps[16] =  get_field('apartment', 272);
        $apps[17] =  get_field('apartment', 276);
        $apps[18] =  get_field('apartment', 280);
        $apps[19] =  get_field('apartment', 284);
        $apps[20] =  get_field('apartment', 288);

        $apps[21] =  get_field('apartment', 292);
        $apps[22] =  get_field('apartment', 296);
        $apps[23] =  get_field('apartment', 300);
        $apps[24] =  get_field('apartment', 304);*/


        $result = $apps[$floor];
        return $result;
    }
    $apartments = app($floor);

    $floors = get_field('floor',188);
    //print_r($floors);
    foreach ($floors as $itemFloor){
        if($itemFloor['num'] == $floor){
            $currentFloor = $itemFloor;
            $img_full = $itemFloor['img'];
        }
    }

    ?>
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
                    <a href="#" class="select-button select-button__flat-plan btn">
                        <img src="img/select-appartmets/long-arrow.png" alt="icon" class="select-button__icon select-button__icon_transform">
                        <span class="select-button__text btn__text">Обрати квартиру</span>
                    </a>
                
                    <a href="#" class="select-button select-button__flat-plan btn">
                        <!-- <img src="img/select-appartmets/filter.png" alt="icon" class="select-button__icon select-button__icon_scale"> -->
                        <span class="filter-btn__icon">
                            <div class="filter-btn__line"><span class="filter-btn__dot filter-btn__dot_1"></span></div>
                            <div class="filter-btn__line"><span class="filter-btn__dot filter-btn__dot_2"></span></div>
                            <div class="filter-btn__line"><span class="filter-btn__dot filter-btn__dot_3"></span></div>
                        </span>
                        <span class="select-button__text btn__text">Фільтр</span>
                    </a>
                </div>

                <div class="select-apartmens-middle">
                    <div class="flat__image-wrap">
                        <img src="img/flat-plan/flat-1.png" alt="" class="flat__image">
                    </div>

                    <div class="flat-parameters-wrap">
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
                    <div class="select-apartmens-bottom">
                        <div class="apartmens-plan">
                            <p class="apartmens-plan__text">План поверху</p>
                            <div class="apartmens-plan-image-wrap">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                     width="100%" height="100%" viewBox="0 0 2487.000000 1370.000000"
                                     preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,1370.000000) scale(0.100000,-0.100000)"
                                       fill="#000000" stroke="none">
                                        <path d="<?=$img_full?>" />
                                    </g>

                                    <g transform="matrix(2.828525,-0.01893281,0,2.8903451,2796.9039,79.628362)" id="g15">
                                        <g id="layer1">
                                            <?foreach ($apartments as $itemFloor){?>
                                                <a href="/projects/?floor=<?=$_GET['floor']?>&flat=<?=$itemFloor['ap_id']?>" class="apartment__link">
                                                    <path class="apartment <?if($itemFloor['ap_id']==$_GET['flat']){ echo 'this';}?>"
                                                          d="<?=$itemFloor['mouseover']?>"
                                                           />
                                                </a>
                                            <?}?>
                                        </g>
                                    </g>

                                </svg>
                            </div>   
                        </div>
                        <a href="#" class="select-apartmens-bottom__button btn">
                            <img src="img/flat-plan/pdf-icon.png" alt="icon" class="select-apartmens-bottom__button-icon">
                            <span class="btn__text">Завантажити PDF</span>
                        </a>
                        <a href="#" class="select-apartmens-bottom__button btn js-open-callback-form">
                            <span class="btn__text">Дізнатися ціну</span>
                        </a>
                    </div>
                </div>
                <img src="img/select-appartmets/compas.png" alt="image" class="select-apartmens__image select-apartmens__image_none">
            </div>
        </section>
 <style>
     .this:hover {
         fill: rgba(210,197,197,.9);
     }
 </style>

        
    <?php include_once('includes/footer.php');?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/select-appartmens.min.js"></script>
</body>
</html>