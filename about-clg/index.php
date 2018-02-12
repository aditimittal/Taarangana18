<!DOCTYPE html>
<html lang="en">
<head>
<title>AboutUs | Taarangana'18</title>
<?php include('../module/head.php') ?></head>
    <body>
<?php include('../module/navbar.php') ?>
<?php include('../module/form.php') ?>
        <div id="fullpage">
            <section id="venue-opening" class="section bg">
                <div class="container narrow">
                    <h3 class="title-45 wow fadeInUp" style="font-weight: 900">Indira Gandhi Delhi Technical University for Women</h3>
                </div>
                <img src="../assets/img/Build.jpg" class="venue-opening-img">
            </section>
            <section id="map" class="section bg09">
                <div class="container">
                    <div class="address wow fadeInUp">
                        <address class="visible-xs">Situated in the lush green grandeur of Kashmere Gate, IGDTUW boasts of being situated in the most prime location of Delhi-06.It lies in great proximity to important landmarks like Red Fort, Chandni Chowk, Old Delhi Railway Station,ISBT. <br></address>
                    </div>
                    <div class="map wow fadeInUp" data-wow-delay=".2s">
                        <div id="google-map"></div>
                    </div>
                    <div class="address wow fadeInUp">
                        <address class="hidden-xs">Situated in the lush green grandeur of Kashmere Gate, IGDTUW boasts of being situated in the most prime location of Delhi-06.It lies in great proximity to important landmarks like Red Fort, Chandni Chowk, Old Delhi Railway Station,ISBT.</address>
                        
                    </div>
                </div>
            </section>
            <section id="how-to-get" class="section">
                <div class="side-wrap clearfix">
                    <div class="left-side bg08 anim">
                        <div class="inner-content center">
                            <div class="left-middle no-xs">
                             <h3 class="title-38"><strong>Women in </strong>Engineering</h3>
                                <p>IGDTUW (formerly known as IGIT)
emerged as an independent University in May 2013, with an aim to bring forth passionate women
engineers. IGDTUW is South Asia’s first women’s technical
university, ranked 2nd among the top 10 emerging engineering institutes of India.
                                  <h3>Find Us</h3>
                                <p>Near Kashmere Gate Metro Station (Gate No.7)</p>
                                <h3>Contact Us:</h3>
								<h4><a href="mailto:website@taarangana.com" style="color:#fa2e70;">website@taarangana.com</a></h4>
                           </div>
                        </div>
                    </div>
                    <div class="right-side bg03 anim">
                        <div class="inner-content center">
                            <div class="left-middle no-xs">
                            <h1>About Us</h1>
                             <h4>Taarangana is the annual cultural festival of Indira Gandhi Delhi Technical University for Women, Kashmere Gate, Delhi. <br><br>Spread over a span of two days, it aims at
becoming a seamless medium of cultural learning for students from all over the country. <br><br>The sole
vision behind the hosting of Taarangana is to promote interaction between students hailing from
different backgrounds and give them a taste of dance, music, theatre, literature, and art. </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php include('../module/footer.php') ?>
        
        <script>
            $(function(){
                $(window).resize(function(){
                    if($(window).width()<768){
                        if($('#fullpage').hasClass('fullpage-wrapper')) $.fn.fullpage.destroy('all');
                        $('#venue-opening').height($(window).height())
                    } else {
                        $('#fullpage').fullpage({
                            scrollBar:true
                        });
                    }
                }).trigger('resize');
                
                var lat = 28.6652, lng = 77.2324
                var mapOption = {
                    styles: [
                        {
                            "featureType": "all",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                },
                                {
                                    "saturation": "-100"
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 40
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#032635"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#4d6059"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.natural",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#3c5f58"
                                },
                                {
                                    "saturation": "0"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#4d6059"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#4d6059"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#7f8d89"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 18
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#0a3c52"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#1c4b5f"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#fa2e70"
                                },
                                {
                                    "lightness": 19
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#2b3638"
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#2b3638"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#62f1d2"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#24282b"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        }
                    ],
                    zoom: 17, 
                    center: {lat: lat, lng: lng}
                }
                var map = new google.maps.Map(document.getElementById('google-map'), mapOption);
                var marker = new google.maps.Marker({
                    position: {lat: lat, lng: lng},
                    map: map,
                    icon: '../assets/img/mapm.png'
                });
            });
        </script>
        
    </body>
	</html>