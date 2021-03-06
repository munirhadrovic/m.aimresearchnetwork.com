<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
            $(function(){
                $('#menu-seo5').slicknav({
                    prependTo:'#navigation-menu-seo5'
                });
            });
            $(function(){
                $('#menu-seo6').slicknav({
                    prependTo:'#navigation-menu-seo6'
                });
            });
            $(function(){
                $('#menu-seo7').slicknav({
                    prependTo:'#navigation-menu-seo7'
                });
            });



			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			// $(document).bind ('pageshow', function (e, data) {
			// 	console.log ($('#page1'));
			// 	console.log ($.mobile.activePage);

			// 	if ($.mobile.activePage.attr('id') == 'page1') { 
			// 		console.log ('Bingo!'); 
			// 		$(function(){
			//    			$( "[data-role='header'], [data-role='footer']" ).toolbar();
			// 		}); 
			// 	}
			// 	else {
			// 		$(function(){
			//    			$( "[data-role='header1'], [data-role='footer1']" ).toolbar();
			// 		}); 
			// 	}
			// });
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			// echo "<script type='text/javascript'>alert('$transitionefect')</script>";
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.gif" alt="LOGO"></h1>

		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
            <h1>Powered by <a href="http://mobilegrows.com/" rel="external" >MobileGrows </a>|<a href="http://www.aimresearchnetwork.com/" rel="external"> Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  	<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/01.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/02.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/03.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/04.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
                <fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
                    <!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI -->
                    <div class="ui-block-a">
                        <a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="#myPopuptelephone" data-rel="popup" data-transition="flow">Call US</a>
                    </div>
                    <!-- ovdje se upisuje grad i adresa iz koje -->
                    <div class="ui-block-b" id="findUS">
                        <a class="ui-btn ui-icon-location ui-btn-icon-right buttons-radius" href="#myPopup" data-rel="popup" data-transition="flow">Find US</a>
                    </div>
                </fieldset>
                <!-- pop up for telefon -->
                <div data-role="popup" id="myPopuptelephone" class="ui-content">
                    <?php
                    for ($i=0; $i <$companynumber ; $i++) {
                        ?>
                        <a href='tel:<?php echo $telephone[$i] ?>' class="ui-btn"><?php echo $nazivlokacije[$i] ?></a>
                    <?php
                    }
                    ?>
                </div>
                <!-- pop up for telefon -->

                <!-- POPUP FOR FIND US -->
                <div data-role="popup" id="myPopup" class="ui-content">
                    <div id="multiadress">
                    </div>
                    <?php
                    for ($i=0; $i<$companynumber ; $i++) {
                        ?>
                        <script>
                            var ua = navigator.userAgent;
                            if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
                                console.log("Android uslo");
                                var prostordugme=document.getElementById('multiadress');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "ui-btn findlinks");
                                dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>");
                                dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
                                prostordugme.appendChild(dugme);
                            }

                            else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
                                console.log("Iphone ");
                                var prostordugme=document.getElementById('multiadress');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "ui-btn findlinks");
                                dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?> ");
                                dugme.innerHTML="<p><?php echo $nazivlokacije[$i] ?></p>";
                                prostordugme.appendChild(dugme);
                            }

                            else if (ua.indexOf("BlackBerry") >= 0)
                            {
                                console.log("Blakberu je prosao ");
                                console.log("Blakberu je prosao ")
                                var prostordugme=document.getElementById('multiadress');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "ui-btn findlinks");
                                dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>'}});");
                                dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
                                prostordugme.appendChild(dugme);
                            }

                            else {
                                console.log("nije nigdje uslo default ")
                                var prostordugme=document.getElementById('multiadress');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "ui-btn findlinks");
                                dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>");
                                dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
                                prostordugme.appendChild(dugme);
                            }

                            // if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                            // // some code..
                            // }
                        </script>
                    <?php
                    }
                    ?>
                </div>
                <!-- POPUP FOR FIND US -->
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></div>
                </div>
                <div data-role="collapsible-set">
                    <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                        <h3>About us</h3>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">About AIM</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Our Team</a>
                    </div>
                    <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                        <h3>Services</h3>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Service Overview</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Project Management</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Audience Testing</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Automotive Studies</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Medical Recruiting</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Mock Juries</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Recruiting</a>
                    </div>

                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Technology</a></div>
                </div>

                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Links</a></div>
                </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Concierge</a></div>
                    </div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>


        </div>
        </div>
		</div>
   

		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Technology</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Links</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Concierge</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>


							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          <!--OUR TEAMDr. Thomas///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          <div data-role="page" id="home" data-theme="<?php echo $theme ?>">
              <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                  <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                      <section id="navigation-menu-seo5">
                          <ul id="menu-seo5" class="naziv">
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Technology</a></li>
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Links</a></li>
                              <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Concierge</a></li>
                              <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
                          </ul>
                      </section>
                      <p>This is only a <strong>preview</strong> version of your Mobile Website.</p>
                      <hr>
                      <p>Please contact our official Sales Represcutative for Full Functional <strong>Version.</strong></p>









                  </div>

              </div>


          </div>


          <!--OUR TEAM Dr. Thomas///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


















<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
