var locationMap = (function() {

    function init() {
        var mapContainer = document.querySelector('.js-map');
        var mapCenter = {lat: 50.425787, lng: 30.517463};
        var infowindow = null;
        var zoom = 16;
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
            // gift_shop: {
            //     sprite_locaion: {x: 101, y: 2},
            //     size: standardIconSize
            // },
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
                  // {lat: 50.425305, lng: 30.517119, type: 'shopping_mall', message: '<span class="infowindow">shopping_mall</span>'},
                  {lat: 50.42514855, lng: 30.52497674, type: 'supermarket', message: '<span class="infowindow">Екомаркет</span>'},
                  {lat: 50.42603357, lng: 30.5152864, type: 'supermarket', message: '<span class="infowindow">Billa</span>'},
                  {lat: 50.43620036, lng: 30.51712898, type: 'bank', message: '<span class="infowindow">Укрсоцбанк</span>'},
                  {lat: 50.425363, lng: 30.521542, type: 'bank', message: '<span class="infowindow">Приватбанк</span>'},
                  {lat: 50.42835607, lng: 30.5169313, type: 'higher_education_establishment', message: '<span class="infowindow">КНЛУ</span>'},
                  {lat: 50.42572599, lng: 30.51798273, type: 'cafe_restaraunts', message: '<span class="infowindow">Usbekishak</span>'},
                  {lat: 50.42641772, lng: 30.51649937, type: 'sport_complex', message: '<span class="infowindow">Фитнес студія</span>'},
                  {lat: 50.428307, lng: 30.517162, type: 'toy_store', message: '<span class="infowindow">Дитячий садок №728</span>'},
                  {lat: 50.423486, lng: 30.516403, type: 'toy_store', message: '<span class="infowindow">Дитячий садок Newton Kids</span>'},
                  {lat: 50.4349339, lng: 30.51880406, type: 'school', message: '<span class="infowindow">Школа №78</span>'},
                  {lat: 50.42000711, lng: 30.51745082, type: 'school', message: '<span class="infowindow">Школа №37</span>'},
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
