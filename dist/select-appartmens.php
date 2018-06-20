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
                <div class="page-top animate">
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
            <div class="select-apartmens-wrap">
                <div class="select-apartmens-top">
                    <a href="#" class="select-button btn">
                        <img src="img/select-appartmets/long-arrow.png" alt="icon" class="select-button__icon">
                        <span class="select-button__text btn__text">Обрати квартиру</span>
                    </a>
                    
                    <div class="select-floor">
                        <a href="#" class="select-floor__button">
                            <svg class="select-floor__icon select-floor__icon_top" xmlns="http://www.w3.org/2000/svg" width="444.819" height="444.819" viewBox="0 0 444.819 444.819"><path d="M352.025 196.712L165.884 10.848C159.029 3.615 150.469 0 140.187 0s-18.842 3.619-25.697 10.848L92.792 32.264c-7.044 7.043-10.566 15.604-10.566 25.692 0 9.897 3.521 18.56 10.566 25.981L231.545 222.41 92.786 361.168c-7.042 7.043-10.564 15.604-10.564 25.693 0 9.896 3.521 18.562 10.564 25.98l21.7 21.413c7.043 7.043 15.612 10.564 25.697 10.564 10.089 0 18.656-3.521 25.697-10.564L352.025 248.39c7.046-7.423 10.571-16.084 10.571-25.981.001-10.088-3.525-18.654-10.571-25.697z"/></svg>
                        </a>
                        <p class="select-floor__text">3 поверх</p>
                        <a href="#" class="select-floor__button">
                            <svg class="select-floor__icon select-floor__icon_bottom" xmlns="http://www.w3.org/2000/svg" width="444.819" height="444.819" viewBox="0 0 444.819 444.819"><path d="M352.025 196.712L165.884 10.848C159.029 3.615 150.469 0 140.187 0s-18.842 3.619-25.697 10.848L92.792 32.264c-7.044 7.043-10.566 15.604-10.566 25.692 0 9.897 3.521 18.56 10.566 25.981L231.545 222.41 92.786 361.168c-7.042 7.043-10.564 15.604-10.564 25.693 0 9.896 3.521 18.562 10.564 25.98l21.7 21.413c7.043 7.043 15.612 10.564 25.697 10.564 10.089 0 18.656-3.521 25.697-10.564L352.025 248.39c7.046-7.423 10.571-16.084 10.571-25.981.001-10.088-3.525-18.654-10.571-25.697z"/></svg>
                        </a>
                    </div>
                
                    <a href="#" class="select-button btn">
                        <img src="img/select-apartment/filter.png" alt="icon" class="select-button__icon select-button__icon_long">
                        <span class="select-button__text btn__text">Фільтр</span>
                    </a>
                </div>
                <div class="apartmens-plan-wrap">
                    <? include_once('includes/houses/2.php'); ?>   
                </div>
                <img src="../dist/img/choose-apartment/nav.png" alt="image" class="select-apartmens__image">
            </div>
        </div>

        <div class="apartment-tooltip">
        <div class="apartment-tooltip-wrap">
            <svg class="apartment-tooltip__icon" xmlns="http://www.w3.org/2000/svg" id="svg2" viewBox="0 0 160.9 151.3"><g transform="translate(-58.4 -28.9)" id="Слой_5"><g id="g298"><g id="g300"><path id="path302" d="M79.8 111.9C72 103.2 68 92.5 68 80.3c0-12.9 4.5-24.1 13.5-33.4 9-9.3 20-14 32.8-14 13 0 24.1 4 33.1 12-.7-.8-1.5-1.6-2.2-2.4-9.2-9-20.9-13.6-34.8-13.6-12.8 0-23.8 4.7-32.8 14-9 9.3-13.6 20.6-13.6 33.4 0 13.2 4.6 24.5 13.8 33.7.7.7 1.3 1.3 2 1.9z" class="st3" fill="#fff"/><path id="path304" d="M154.2 42.2c-.9-.9-1.8-1.8-2.8-2.6 9.4 10.4 14.2 22.8 14.2 37 0 14.8-5.3 27.6-15.8 38.1s-23.4 15.8-38.3 15.8c-14.1 0-26.4-4.7-36.6-14.1.8.8 1.5 1.6 2.3 2.4 10.6 10.3 23.4 15.6 38.2 15.6 14.9 0 27.8-5.3 38.3-15.8 10.5-10.5 15.8-23.3 15.8-38.1.2-14.9-5-27.7-15.3-38.3z" class="st3" fill="#fff"/></g><g id="g306"><path id="path308" d="M207.7 84.1c0 4.7-1.7 9.5-5 14l-19.5 27.1h5.3l17.1-23.7c3.3-4.6 5-9.3 5-14 0-4.8-1.6-8.9-4.7-12l-.6-.6c1.6 2.7 2.4 5.8 2.4 9.2z" class="st3" fill="#fff"/><path id="polygon310" class="st3" fill="#fff" d="M174.3 134.4h36.9v-5.7h-2.8v2.3h-31.7z"/><path id="path312" d="M193.4 76.5c2.9 0 5.3.8 7.5 2.6-.6-1.1-1.3-2.1-2.3-3-2.3-2-5-3-8.1-3-3 0-7 1.6-12.1 4.8V83l2-1.3c5.5-3.4 9.8-5.2 13-5.2z" class="st3" fill="#fff"/></g></g><g id="g314"><g id="g316"><path id="path318" d="M60.4 179.5h-2v-14.8h6.8c.6 0 1.2.1 1.8.2.6.1 1.1.3 1.6.6s.8.7 1.1 1.2c.3.5.4 1.2.4 1.9 0 .5-.1 1-.2 1.4-.1.4-.3.7-.5 1-.2.3-.4.5-.7.7-.2.2-.5.3-.7.5l.6.3c.2.1.4.3.6.4.2.2.3.4.5.8.1.3.2.7.2 1.2v2.7c0 .4.1.7.2.9.1.2.3.4.6.6v.3h-2.4c-.1-.2-.1-.5-.2-.9 0-.4-.1-.7-.1-1.1 0-.4 0-.7-.1-1v-.7c0-.3 0-.6-.1-.9 0-.3-.2-.6-.3-.9-.2-.3-.5-.5-.8-.6-.4-.2-.8-.2-1.4-.2h-4.8v6.4zm0-8H65c.4 0 .7 0 1.1-.1a3 3 0 0 0 1-.4c.3-.2.5-.4.7-.8.2-.3.3-.8.3-1.3 0-.6-.1-1-.3-1.3-.2-.3-.4-.6-.7-.7-.3-.2-.6-.3-.9-.3-.3 0-.6-.1-.8-.1h-5v5z" class="st3" fill="#fff"/><path id="path320" d="M89.6 179.5H78.7v-14.8h10.8v1.8h-8.8v4.3h8.1v1.8h-8.1v5.1h8.9v1.8z" class="st3" fill="#fff"/><path id="path322" d="M106.8 169.1c0-.6-.2-1-.4-1.4-.2-.4-.5-.7-.9-.9-.3-.2-.7-.4-1.1-.5-.4-.1-.8-.1-1.2-.1-.3 0-.7 0-1.1.1-.4.1-.8.2-1.1.4-.3.2-.6.4-.9.8-.2.3-.4.8-.4 1.3 0 .3 0 .6.1.8.1.2.3.4.5.6.3.2.6.3 1.1.5.5.1 1.1.3 1.9.5 1.1.3 2.1.5 2.8.8.7.3 1.3.6 1.7.9.4.3.7.7.9 1.2.2.5.2 1 .2 1.6 0 .9-.2 1.6-.5 2.2-.3.6-.8 1-1.4 1.4-.6.3-1.2.6-1.9.7-.7.1-1.3.2-2 .2-1.2 0-2.2-.2-3-.5-.8-.3-1.4-.8-1.8-1.3-.4-.5-.7-1.1-.9-1.7-.2-.6-.2-1.2-.2-1.7h1.9c0 .7.1 1.2.4 1.7.2.4.6.8 1 1.1.4.3.8.5 1.3.6.5.1.9.2 1.4.2.4 0 .8 0 1.2-.1.4-.1.9-.2 1.3-.4s.7-.4 1-.8c.3-.3.4-.8.4-1.3 0-.4 0-.7-.1-1-.1-.3-.3-.5-.6-.8-.3-.2-.8-.4-1.5-.6-.7-.2-1.6-.4-2.8-.7-.7-.1-1.2-.3-1.8-.5a4 4 0 0 1-1.3-.7c-.4-.3-.6-.6-.8-1-.2-.4-.3-.9-.3-1.5s.1-1.1.3-1.7c.2-.5.5-1 .9-1.5.4-.4.9-.8 1.6-1 .6-.3 1.4-.4 2.3-.4 1.3 0 2.3.2 3.1.5.8.3 1.3.8 1.7 1.2.4.5.6 1 .8 1.5.1.5.2 1 .2 1.4h-2z" class="st3" fill="#fff"/><path id="path324" d="M119.2 179.5h-2v-14.8h2v14.8z" class="st3" fill="#fff"/><path id="path326" d="M127.9 164.7h6c1 0 1.8.2 2.6.5.8.4 1.4.8 2 1.5.5.6.9 1.4 1.2 2.3.3.9.4 1.9.4 2.9 0 .8-.1 1.7-.3 2.6-.2.9-.5 1.7-1 2.5a5.46 5.46 0 0 1-4.9 2.5H128v-14.8zm2 13.1h3.9c1.3 0 2.3-.5 3.1-1.5.8-1 1.2-2.4 1.2-4.3s-.4-3.3-1.2-4.2c-.8-.9-1.9-1.4-3.2-1.4H130v11.4z" class="st3" fill="#fff"/><path id="path328" d="M159.1 179.5h-10.9v-14.8H159v1.8h-8.8v4.3h8.1v1.8h-8.1v5.1h8.9v1.8z" class="st3" fill="#fff"/><path id="path330" d="M177.2 164.7h1.9v14.8h-2.2l-7.5-11.9v11.9h-1.9v-14.8h2.4l7.4 11.9v-11.9z" class="st3" fill="#fff"/><path id="path332" d="M198.2 169.2a3.38 3.38 0 0 0-1.8-2.5c-.4-.2-.8-.4-1.2-.4-.4-.1-.8-.1-1.2-.1-.7 0-1.3.1-1.9.4-.6.2-1.1.6-1.5 1.1a6.77 6.77 0 0 0-1.4 4.4c0 .9.1 1.7.2 2.4.2.8.4 1.4.8 2 .4.5.9 1 1.5 1.3.6.3 1.4.5 2.3.5.3 0 .7-.1 1.1-.2a4.26 4.26 0 0 0 2.3-1.8c.3-.5.6-1.2.8-2.1h1.9c-.1.9-.4 1.7-.7 2.4a5 5 0 0 1-1.1 1.6c-.4.4-.9.8-1.3 1-.5.2-.9.4-1.4.5-.4.1-.8.2-1.2.2h-.8c-.8 0-1.7-.1-2.5-.4-.8-.3-1.5-.7-2.1-1.4-.6-.6-1.1-1.4-1.5-2.4-.4-1-.6-2.2-.6-3.6 0-1.1.2-2.2.5-3.1.3-.9.8-1.8 1.4-2.4a6.84 6.84 0 0 1 5.1-2.2c.9 0 1.8.1 2.5.4a5.66 5.66 0 0 1 3 2.6c.3.6.5 1.2.5 1.8h-1.7z" class="st3" fill="#fff"/><path id="path334" d="M219.3 179.5h-10.9v-14.8h10.8v1.8h-8.8v4.3h8.1v1.8h-8.1v5.1h8.9v1.8z" class="st3" fill="#fff"/></g></g></g></svg>

            <ul class="apartment-tooltip-descript">
                <li class="apartment-tooltip-descript__item">
                    <p class="apartment-tooltip-descript__text"><span class="apartment-tooltip-descript__text_semibold">Кількість кімнат:</span> 3</p>
                </li>
                <li class="apartment-tooltip-descript__item">
                    <p class="apartment-tooltip-descript__text"><span class="apartment-tooltip-descript__text_semibold">Загальна площа:</span> 112,9 м<span class="exponent">2</span></p>
                </li>
                <li class="apartment-tooltip-descript__item">
                    <p class="apartment-tooltip-descript__text"><span class="apartment-tooltip-descript__text_semibold">Житлова площа:</span> 45,5 м<span class="exponent">2</span></p>
                </li>
                <li class="apartment-tooltip-descript__item">
                    <p class="apartment-tooltip-descript__text"><span class="apartment-tooltip-descript__text_semibold">Поверх:</span> 3-21</p>
                </li>
            </ul>
        </div>
    </div>
    </section>
 

        
    <?php include_once('includes/footer.php');?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/select-appartmens.min.js"></script>
</body>
</html>