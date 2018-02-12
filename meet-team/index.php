<!DOCTYPE html>
<html lang="en">
<head>
<title>Meet the Team | Taarangana'18</title>
<?php include('../module/head.php') ?>
<style>
img.tem{

height:300px;
width:500px;
}

</style>
</head>
<body class="bg">
	<?php include('../module/navbar.php') ?>
	<?php include('../module/form.php') ?>        
        <section id="speakers-opening">
            <div class="container narrow">
                  <h1 class="title-45 wow fadeInUp">The league continuing the legacy of <strong>Taarangana</strong></h1>
			</div>             
        </section>

        <section id="speakers">
            <div class="container">
                <div class="tab-navigation wow fadeInUp">
                     <ul class="nav hidden-xs" role="tablist">                       
                        <li class="active"><a href="#core-team" class="btn" data-toggle="tab">Core Team</a></li>
                        <li><a href="#website-team" class="btn" data-toggle="tab">Website Team</a></li>                       
                    </ul>                    
                         <div class="dropdown visible-xs">
                        <button type="button" class="btn not-anim btn-border btn-block dropdown-toggle" data-toggle="dropdown">
                        <span class="text">Core Team</span> <i class="ic-chevron-thin-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="#core-team">Core Team</a></li>
                            <li ><a href="#website-team">Website Team</a></li>                      
                        </ul>
                    </div>                
                </div>

                <div class="tab-content">
                   
                    <div class="tab-pane active" id="core-team">
                        <div class="row figure-wrap">
						
							<div class="col-sm-6">
                                <div class="figure-item wow fadeInUp">
                                    <div class="figure-img "><a href="../assets/img/team/creative1.jpg" data-fancybox="team" data-caption="Nikita, Shagun and Vaishali (from left to right)"><img src="../assets/img/team/creative1.jpg"></a></div>
                                    <div class="figure-caption" style=" margin-top: -100px;">
                                        <h3>Creative Team</h3>
                                        <div class="attr text-danger"><h5>Nikita, Shagun and Vaishali (from left to right)</h5></div>
                                    </div>
                                </div>
                            </div>
							
							<div class="col-sm-6">
                                <div class="figure-item wow fadeInUp">
                                    <div class="figure-img "><a href="../assets/img/team/em1.jpg" data-fancybox="team" data-caption="Shubha, Meesha and Nancy (from left to right)"><img src="../assets/img/team/em1.jpg"></a></div>
                                    <div class="figure-caption" style=" margin-top: -100px;">
                                        <h3>Event Management Team</h3>
                                        <div class="attr text-danger"><h5>Shubha, Meesha and Nancy (from left to right)</h5></div>
                                    </div>
                                </div>
                            </div>
							
							<div class="col-sm-6">
                                <div class="figure-item wow fadeInUp">
                                    <div class="figure-img "><a href="../assets/img/team/pr1.jpg" data-fancybox="team" data-caption="Surbhi and Deeksha (from left to right)"><img src="../assets/img/team/pr1.jpg"></a></div>
                                    <div class="figure-caption" style=" margin-top: -100px;">
                                        <h3>Public Relations</h3>
                                        <div class="attr text-danger"><h5>Surbhi and Deeksha (from left to right)</h5></div>
                                    </div>
                                </div>
                            </div>
							
							<div class="col-sm-6">
                                <div class="figure-item wow fadeInUp">
                                    <div class="figure-img "><a href="../assets/img/team/sponsi1.jpg" data-fancybox="team" data-caption="Kanika, Nikshubha and Vidushi (from left to right)"><img src="../assets/img/team/sponsi1.jpg"></a></div>
                                    <div class="figure-caption" style=" margin-top: -100px;">
                                        <h3>Sponsorship Team</h3>
                                        <div class="attr text-danger"><h5>Kanika, Nikshubha and Vidushi (from left to right)</h5></div>
                                    </div>
                                </div>
                            </div>                       
							
							
							<div class="col-sm-6">
                                <div class="figure-item wow fadeInUp">
                                    <div class="figure-img "><a href="../assets/img/team/website1.jpg" data-fancybox="team" data-caption="Shruti Bhatia and Shubhi Agarwal (from left to right)"><img src="../assets/img/team/website1.jpg"></a></div>
                                    <div class="figure-caption" style=" margin-top: -100px;">
                                        <h3>Website Team</h3>
                                        <div class="attr text-danger"><h5>Shruti Bhatia and Shubhi Agarwal (from left to right)</h5></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="tab-pane" id="website-team">
                        <div class="row figure-wrap">
							<div class="col-sm-12">
                                <div class="figure-item wow fadeInUp">
                                    <div class="figure-img "><a href="../assets/img/team/team1.jpg" data-fancybox  data-caption="Top row(from left to right): Harshita Kalsi, Tripti Gupta, Aditi Mittal, Shruti Bhatia, Shubhi Agarwal, Vipasha Dhiman, Ayushi Singh, Mridul Khetarpal, Anshika Gupta<br>
Bottom row( from left to right): Sara Khurana, Sanyogita Singh, Jap Leen Kaur Jolly, Anupriya Singh, Sakriti Dixit"><img src="../assets/img/team/team1.jpg"></a></div>
                                    <div class="figure-caption" style=" margin-top: -100px;">
                                        <br><br>
                                        <div class="attr text-danger">Top row(from left to right): Harshita Kalsi, Tripti Gupta, Aditi Mittal, Shruti Bhatia, Shubhi Agarwal, Vipasha Dhiman, Ayushi Singh, Mridul Khetarpal, Anshika Gupta<br>
Bottom row( from left to right): Sara Khurana, Sanyogita Singh, Jap Leen Kaur Jolly, Anupriya Singh, Sakriti Dixit</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <?php include('../module/footer.php') ?>            
        <script>
            $(function(){
                function getParameterByName(name, url) {
                    if (!url) url = window.location.href;
                    name = name.replace(/[\[\]]/g, "\\$&");
                    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                        results = regex.exec(url);
                    if (!results) return null;
                    if (!results[2]) return '';
                    return decodeURIComponent(results[2].replace(/\+/g, " "));
                }
                if(getParameterByName('tab')!=null){
                    $('.tab-navigation .nav>li>a[href="#'+getParameterByName('tab')+'"]').tab('show')
                }
                $('[data-toggle="bio-popup"]').click(function(e){
                    $('body').addClass('bio-open')
                    $($(this).data('bio')).fadeIn()
                    history.pushState(null, '404', $(this).attr('href'))

                    $('.bio-slick:visible').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
                        var prevText = $('.bio-item.slick-current:visible').prev('.bio-item').find('h4').text().split(' ').join('<br>')
                        var nextText = $('.bio-item.slick-current:visible').next('.bio-item').find('h4').text().split(' ').join('<br>')
                        var prevUrl = $('.bio-item.slick-current:visible').prev('.bio-item').data('url')
                        var nextUrl = $('.bio-item.slick-current:visible').next('.bio-item').data('url')

                        $('.bio-slick:visible').find('.slick-prev span').html(prevText)
                        $('.bio-slick:visible').find('.slick-prev').attr('href', prevUrl)
                        var mprev = (100-$('.bio-slick:visible').find('.slick-prev span').height())/2;
                        $('.bio-slick:visible').find('.slick-prev span').css('margin-top', mprev)
                        $('.bio-slick:visible').find('.slick-next span').html(nextText)
                        $('.bio-slick:visible').find('.slick-next').attr('href', nextUrl)
                        var mnext = (100-$('.bio-slick:visible').find('.slick-next span').height())/2;
                        $('.bio-slick:visible').find('.slick-next span').css('margin-top', mnext)

                        history.pushState(null, '404', $('.bio-item.slick-current:visible').data('url'))
                    });
                    var initSlide = $(this).parents('.col-sm-4').index()
                    $('.bio-slick:visible').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: false,
                        autoplay: false,
                        infinite: false,
                        initialSlide: initSlide,
                        prevArrow: '<a href="#" onclick="javascript:void(0)" class="slick-prev"><i class="ic-angle-left"></i> <span></span></a>',
                        nextArrow: '<a href="#" onclick="javascript:void(0)" class="slick-next"><i class="ic-angle-right"></i> <span></span></a>'
                    });
                    $('.bio-content').each(function(i, el){
                        new IScroll(el, { mouseWheel: true });
                    })
                    e.preventDefault()
                })
                $('[data-dismiss="bio-popup"]').click(function(){
                    history.pushState(null, '404', 'speakers')
                    $('body').removeClass('bio-open')
                    $(this).parents('.bio-popup').fadeOut()
                    if($('.bio-slick:visible').hasClass('slick-slider')) $('.bio-slick:visible').slick('unslick');

                })
                $('[data-toggle="bio-right"]').click(function(e){
                    $('body').addClass('bio-open')
                    $('.bio-right').removeClass('active')
                    $($(this).attr('href')).addClass('active')
                    $('.bio-right-inner').each(function(i, el){
                        new IScroll(el, { mouseWheel: true });
                    })
                    e.preventDefault()
                })
                $('[data-dismiss="bio-right"]').click(function(){
                    $('body').removeClass('bio-open')
                    $(this).parents('.bio-right').removeClass('active')
                })
                $('.tab-navigation .dropdown-menu>li>a').click(function(e){
                    $('.tab-navigation .dropdown-menu>li').removeClass('active')
                    $(this).parents('li').addClass('active')
                    $('.tab-navigation').find('.dropdown-toggle .text').text($(this).text())
                    $('.tab-navigation .nav>li>a[href="'+$(this).attr('href')+'"]').click()
                    e.preventDefault()
                })


                if(getParameterByName('installation')!=null){
                     $('[data-toggle="bio-popup"][href="speakers/?installation='+getParameterByName('installation')+'"]').click()
                }
                
                if(getParameterByName('speaker')!=null){
                     $('[data-toggle="bio-popup"][href="speakers/?speaker='+getParameterByName('speaker')+'"]').click()
                }
            });
        </script>
    </body>
</html>