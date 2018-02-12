<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Pronight | Taarangana'18</title>       
        <?php include('../module/head.php') ?>	
</head>
    <body class="bg">
		<?php include('../module/navbar.php') ?><?php include('../module/form.php') ?>	
		<div id="fullpage">
		<section id="showcase" class="section">
                <div class="side-wrap clearfix">
                    <div class="left-side bg01">
                        <div class="inner-content center">
                            <div class="left-middle no-xs" >
                                <h2 class="title-50">Starry <span>Nights,</span> Starry <span>Affairs</span></h2>                                
                            </div>
                        </div>
                    </div>
                    <div class="right-side bg02">
                        
                        <div class="showcase-photo">
                            <div class="showcase-img">
                                <img style="margin-top:7%;" src="../assets/img/pronight/diego-miranda/DM_01.jpg">
                            </div>
                            <a href="../diego-miranda" class="showcase-photo-caption">
                                <div class="center-middle">
                                    <div class="name">Day 1: 2nd Feburary</div>
                                    <div class="type">DJ Diego Miranda</div>
                                    <p><p>EDM Night&#8230;</p></p>
                                </div>
                            </a>
                        </div>
						<div class="showcase-photo">
                            <div class="showcase-img">
                                <img style="margin-top:7%;" src="../assets/img/pronight/abish-mathew/2.jpg">
                            </div>
                            <a href="../abish-mathew" class="showcase-photo-caption">
                                <div class="center-middle">
                                    <div class="name">Day 1: 2nd Feburary</div>
                                    <div class="type">Abish Mathew</div>
                                    <p><p>A night of stand-up comedy&#8230;</p></p>
                                </div>
                            </a>
                        </div>
                        <div class="showcase-photo">
                            <div class="showcase-img">
                                <img style="margin-top:7%;" src="../assets/img/pronight/lagori_band/Lagori10.jpg">
                            </div>
                            <a href="../lagori-band" class="showcase-photo-caption">
                                <div class="center-middle">
                                    <div class="name">Day 2: 3rd Feburary</div>
                                    <div class="type">Lagori</div>
                                    <p><p>A night of Rock-Folk fusion&#8230;</p></p>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </section>
       <?php include('../module/footer.php') ?>

            </div>
	   <script>
            $(function(){
                $(window).resize(function(){
                    if($(window).width()<=1024){
                        if($('#fullpage').hasClass('fullpage-wrapper')) $.fn.fullpage.destroy('all');
                        $('#showcase').height('100%')
                        if($(window).width()>767&&$(window).width()<992) {
                            $('#showcase').height('500px')
                        }
                    } else {
                        if(!$('#fullpage').hasClass('fullpage-wrapper')){
                            $('#fullpage').fullpage({
                                scrollBar:true,
                                touchSensitivity: 15,
                                normalScrollElementTouchThreshold: 5                                
                            });
                        }
                    }
                }).trigger('resize');
            });
        </script>
    </body>
</html>