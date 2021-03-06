var locationMap = (function() {

    function init() {
        var mapContainer = document.querySelector('.js-map');
        var mapCenter = {lat: 50.426836, lng: 30.517162};
        var infowindow = null;
        var zoom = 15;
        var initMarkers = [];

        var addr;
        var devEnv = true;

        if(devEnv) {
            addr = "/wp-content/themes/washington/assets/";
        } else {
            addr = "/wp-content/themes/washington/assets/";
        }

        var newUrl = window.location.href;
        var iconsSpritesheet;

        if (newUrl.indexOf('/ru') != -1 ){
          var iconsSpritesheet = addr + 'img/location/location_spritesheet-ru.png';
        }
        else {
          var iconsSpritesheet = addr + 'img/location/location_spritesheet.png';
        }

        var standardIconSize = {x: 42, y: 52};

        var icons = {
            sales_dep: '',
            main: {
                sprite_locaion: {x: 0, y: 58},
                size: {x: 100, y: 92}
            },
            main_sales: {
                sprite_locaion: {x: 185, y: 75},
                size: {x: 80, y: 75}
            },
            bank: {
                sprite_locaion: {x: 174, y: 2},
                size: standardIconSize
            },
            cafe_restaraunts: {
                sprite_locaion: {x: 490, y: 2},
                size: standardIconSize
            },
            dentist: {
                sprite_locaion: {x: 267, y: 2},
                size: standardIconSize
            },
            metro: {
                sprite_locaion: {x: 266, y: 54},
                size: standardIconSize
            },
            higher_education_establishment: {
                sprite_locaion: {x: 49, y: 2},
                size: standardIconSize
            },
            pharmacy: {
                sprite_locaion: {x: 448, y: 2},
                size: standardIconSize
            },
            school: {
                sprite_locaion: {x: 404, y: 2},
                size: standardIconSize
            },
            shopping_mall: {
                sprite_locaion: {x: 2, y: 2},
                size: standardIconSize
            },
            sport_complex: {
                sprite_locaion: {x: 312, y: 2},
                size: standardIconSize
            },
            supermarket: {
                sprite_locaion: {x: 221, y: 2},
                size: standardIconSize
            },
            toy_store: {
                sprite_locaion: {x: 358, y: 2},
                size: standardIconSize
            },
            cruch: {
              sprite_locaion: {x: 311, y: 54},
              size: standardIconSize
            },
            theatre: {
              sprite_locaion: {x:403, y: 54},
              size: standardIconSize
            },
            cinema: {
                sprite_locaion: {x: 358, y: 54},
                size: standardIconSize
            },
            park: {
                sprite_locaion: {x: 447, y: 54},
                size: standardIconSize
            },
            museum: {
                sprite_locaion: {x: 490, y: 54},
                size: standardIconSize
            },

            custom: {
                icon_location: addr + 'img/location/custom_icon'
            }
        };

        // getting map styles
        var xmlhttp = new XMLHttpRequest();
        var url = addr + "js/map.style.json";
        var globalStyles;

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var styles = JSON.parse(this.responseText);
                globalStyles = styles;
                initMapWithStyles(styles);
            };
        };
        xmlhttp.open("GET", url, true);
        xmlhttp.send();


        function getIcon(marker) {
            if(icons[marker.type].size !== undefined) {
                return new google.maps.MarkerImage(iconsSpritesheet,
                    new google.maps.Size(icons[marker.type].size.x, icons[marker.type].size.y),
                    new google.maps.Point(icons[marker.type].sprite_locaion.x, icons[marker.type].sprite_locaion.y));
            } else {
                return icons[marker.type].icon_location;
            }
        };

        // creating map and markers
        function initMapWithStyles(styles) {

            var map = new google.maps.Map(mapContainer, {
                zoom: zoom,
                center: mapCenter,
                disableDefaultUI: true,
                styles: styles
            });

            var markers = [
                  {lat: 50.425611, lng: 30.5188594, type: 'main', message: '<div class="infowindow"><img src="/wp-content/themes/washington/assets/img/home/washington_logo.png" alt><div >Вулиця Лабораторна, 12</div><div>(044) 222-22-22</div></div>'},
                  {lat: 50.426836, lng: 30.5139401, type: 'main_sales', message: '<div class="infowindow"><div ><p>Відділ продажу</p><p>Антоновича, 74</p></div></div>'},
                  {lat: 50.42572599, lng: 30.51798273, type: 'cafe_restaraunts', message: '<span class="infowindow">Usbekishak</span>'},
                  {lat: 50.423288, lng: 30.521117, type: 'higher_education_establishment', message: '<span class="infowindow">Предславинська гімназія №56</span>'},
                  {lat: 50.4207455, lng: 30.520746, type: 'metro', message: '<span class="infowindow">метро Палац Украина</span>'},
                  {lat: 50.4276642, lng: 30.5389609, type: 'metro', message: '<span class="infowindow">метро Печерська</span>'},
                  {lat: 50.432224, lng: 30.5161519, type: 'metro', message: '<span class="infowindow">метро Олімпийська</span>'},
                  {lat: 50.4399837, lng: 30.5178536, type: 'metro', message: '<span class="infowindow">метро Льва Толстого</span>'},
                  {lat: 50.4372429, lng: 30.5310383, type: 'metro', message: '<span class="infowindow">метро Кловська</span>'},
                  {lat: 50.4349339, lng: 30.51880406, type: 'school', message: '<span class="infowindow">Школа №78</span>'},
                  {lat: 50.4390839, lng: 30.513248, type: 'school', message: '<span class="infowindow">Школа №87</span>'},
                  {lat: 50.42000711, lng: 30.51745082, type: 'school', message: '<span class="infowindow">Школа №37</span>'},
                  {lat: 50.4310826, lng: 30.5149575, type: 'school', message: '<span class="infowindow">Школа №112</span>'},
                  {lat: 50.4275997, lng: 30.5145207, type: 'park', message: '<span class="infowindow">Поліцейський скверик</span>'},
                  {lat: 50.435696, lng: 30.5186684, type: 'park', message: '<span class="infowindow">Парк Шота Руставеллі</span>'},
                  {lat: 50.44182031, lng: 30.51301113, type: 'park', message: '<span class="infowindow">Парк ім. Тараса Шевченка</span>'},
                  {lat: 50.44323838, lng: 30.50440507, type: 'park', message: '<span class="infowindow">Ботанічний сад ім. Фоміна</span>'},
                  {lat: 50.4406202, lng: 30.5289384, type: 'park', message: '<span class="infowindow">Парк ім. Богомольця</span>'},
                  {lat: 50.42697742, lng: 30.51771094, type: 'cruch', message: '<span class="infowindow">Костел Св. Миколая</span>'},
                  {lat: 50.4300955, lng: 30.5300778, type: 'cruch', message: '<span class="infowindow">Храм Покрова Пресвятої Богородиці</span>'},
                  {lat: 50.4449191, lng: 30.5087329, type: 'cruch', message: '<span class="infowindow">Собор Св. Володимира</span>'},
                  {lat: 50.4387279, lng: 30.5231726, type: 'shopping_mall', message: '<span class="infowindow">ТРЦ "Гулівер"</span>'},
                  {lat: 50.442483, lng: 30.5209388, type: 'shopping_mall', message: '<span class="infowindow">ТЦ "Метроград"</span>'},
                  {lat: 50.4450988, lng: 30.5206646, type: 'shopping_mall', message: '<span class="infowindow">ТЦ "ЦУМ"</span>'},
                  {lat: 50.4317426, lng: 30.5113668, type: 'cinema', message: '<span class="infowindow">Кінотеатр "Баттерфляй Делюкс"</span>'},
                  {lat: 50.4336379, lng: 30.5165139, type: 'theatre', message: '<span class="infowindow">Театр Оперетти</span>'},
                  {lat: 50.4399214, lng: 30.5059068, type: 'museum', message: '<span class="infowindow">Музей М.Грушевського</span>'},
                  {lat: 50.4434547, lng: 30.5154402, type: 'museum', message: '<span class="infowindow">Національний музей Тараса Шевченка</span>'},
                  {lat: 50.4433105, lng: 30.5314431, type: 'museum', message: '<span class="infowindow">Шоколадний будинок</span>'},
                  {lat: 50.445077, lng: 30.5285887, type: 'museum', message: '<span class="infowindow">Дім з Химерами</span>'},
                  // - Хрещатик
                  // - КМДА
                  {lat: 50.4234519, lng: 30.5166165, type: 'cafe_restaraunts', message: '<span class="infowindow">Ресторан "Огород"</span>'},
                  {lat: 50.429931, lng: 30.5353943, type: 'cafe_restaraunts', message: '<span class="infowindow">Ресторан "Grill du Brazil"</span>'},
                  {lat: 50.4362603, lng: 30.5156877, type: 'cafe_restaraunts', message: '<span class="infowindow">Daily Fish Cafe</span>'},
                  {lat: 50.433845, lng: 30.5087, type: 'cafe_restaraunts', message: '<span class="infowindow">Sam`s Steak House</span>'},
                  {lat: 50.4359839, lng: 30.5078832, type: 'cafe_restaraunts', message: '<span class="infowindow">Ресторан "Musafir"</span>'},
                  {lat: 50.4389137, lng: 30.5195009, type: 'cafe_restaraunts', message: '<span class="infowindow">Milk Bar</span>'},
                  {lat: 50.438959, lng: 30.519448, type: 'cafe_restaraunts', message: '<span class="infowindow">Ресторан "Reef"</span>'},
                  {lat: 50.4390459, lng: 30.5207441, type: 'cafe_restaraunts', message: '<span class="infowindow">Ресторан "Beef Meat&Wine"</span>'},
                  {lat: 50.4386002, lng: 30.5392565, type: 'cafe_restaraunts', message: '<span class="infowindow">Ресторан "Bigl"</span>'},
                  {lat: 50.4450619, lng: 30.520617, type: 'supermarket', message: '<span class="infowindow">Винний магазин "Good Wine"</span>'},
                  {lat: 50.42514855, lng: 30.52497674, type: 'supermarket', message: '<span class="infowindow">Екомаркет</span>'},
                  {lat: 50.42603357, lng: 30.5152864, type: 'supermarket', message: '<span class="infowindow">Billa</span>'},
                  {lat: 50.43620036, lng: 30.51712898, type: 'bank', message: '<span class="infowindow">Укрсоцбанк</span>'},
                  {lat: 50.425363, lng: 30.521542, type: 'bank', message: '<span class="infowindow">Приватбанк</span>'},
                  {lat: 50.42835607, lng: 30.5169313, type: 'higher_education_establishment', message: '<span class="infowindow">КНЛУ</span>'},
                  {lat: 50.42641772, lng: 30.51649937, type: 'sport_complex', message: '<span class="infowindow">Фитнес студія</span>'},
                  {lat: 50.428307, lng: 30.517162, type: 'toy_store', message: '<span class="infowindow">Дитячий садок №728</span>'},
                  {lat: 50.423486, lng: 30.516403, type: 'toy_store', message: '<span class="infowindow">Дитячий садок Newton Kids</span>'},
                  {lat: 50.42354164, lng: 30.51860388, type: 'pharmacy', message: '<span class="infowindow">Аптека низьких цін</span>'},
                  {lat: 50.43460178, lng: 30.51494839, type: 'dentist', message: '<span class="infowindow">Медичний центр Інго</span>'},
                  {lat: 50.42684092, lng: 30.52714289, type: 'dentist', message: '<span class="infowindow">КМЦЛ №17</span>'},




            ];

            markers.forEach(function(marker) {

                var marker = new google.maps.Marker({
                    position: {lat: marker.lat, lng: marker.lng},
                    map: map,
                    icon: getIcon(marker),
                    type: marker.type,
                    message: marker.message,
                    animation: google.maps.Animation.DROP,
                });

                initMarkers.push(marker);

                infowindow = new google.maps.InfoWindow({
                    content: marker.message
                });

                marker.addListener('click', function() {
                    if(infowindow) {
                        infowindow.close();
                    }
                    infowindow.setContent(this.message);
                    infowindow.open(map, marker);

                    $('[style*="background-color: rgb(255, 255, 255)"]').css({
                        "background-color": "transparent"
                    });
                });
            });

        } //end initMapWithStyles

    }// end init



    return {
        init: init
    }

})();

var locationSlider = (function() {

    var locationSlider = $('.js-location__time');

    locationSlider.slick({
        prevArrow: $('.gallery-arrow_location-prev'),
        nextArrow: $('.gallery-arrow_location-next'),
        slidesToShow: 7,
        infinite: false,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1
              }
            }
          ]
    })

})();

locationMap.init();
