<?php
/*
	Template Name: Home
*/
get_header(); 

$first_section_banner_title_one = get_field('first_section_banner_title_one');
$first_section_banner_description_one = get_field('first_section_banner_description_one');


?>


    <main id="content" class="content">

			<section class="vc_row mb-50 fullheight">

				<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="virtuslider"
					data-source="gallery" style="background:transparent;padding:0px;">
					<!-- START REVOLUTION SLIDER 5.4.8.3 fullscreen mode -->
					<div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.3">
						<ul>
							<!-- SLIDE  -->
							<li data-index="rs-1" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0"
								data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
								data-thumb="<?php echo get_template_directory_uri(); ?>/assets/demo/sliders/virtus-1/virtus-50x25.jpg" data-rotate="0" data-saveperformance="off" data-title="Virtus"
								data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
								data-param8="" data-param9="" data-param10="" data-description="">
								<!-- MAIN IMAGE -->
								<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/sliders/virtus-1/virtus.jpg" alt="" title="virtus" width="2880" height="1600"
									data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off"
									class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<h2 class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="['center','center','center','center']"
									data-hoffset="['-1','-1','-1','-1']" data-y="['middle','middle','middle','middle']"
									data-voffset="['-190','-190','-182','-182']" data-fontsize="['100','100','100','72']"
									data-lineheight="['100','100','100','65']" data-width="none" data-height="none" data-whitespace="nowrap"
									data-type="text" data-responsive_offset="on"
									data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 5; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
									<?php echo $first_section_banner_title_one;?> </h2>								

								<!-- LAYER NR. 3 -->
								<p class="tp-caption   tp-resizeme" id="slide-1-layer-3" data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
									data-voffset="['49','49','20','15']" data-fontsize="['21','21','21','16']"
									data-lineheight="['30','30','30','28']" data-letterspacing="['0.5','0.5','0.5','0']"
									data-width="['610','610','610','441']" data-height="none" data-whitespace="normal" data-type="text"
									data-responsive_offset="on"
									data-frames='[{"delay":1300,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 7; min-width: 610px; max-width: 610px; white-space: normal; font-size: 21px; line-height: 30px; font-weight: 400; color: rgba(255,255,255,0.7); letter-spacing: 0.5px;">
									<?php echo $first_section_banner_description_one;?></p>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption rev-btn  tp-resizeme" id="slide-1-layer-4"
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']" data-voffset="['146','146','126','116']"
									data-fontsize="['14','14','13','13']" data-fontweight="['600','600','500','500']"
									data-color="['rgb(255,255,255)','rgb(255,255,255)','rgba(255,255,255,1)','rgba(255,255,255,1)']"
									data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
									data-actions='[{"event":"click","action":"scrollbelow","offset":"-66px","delay":"","speed":"1200","ease":"Quint.easeInOut"}]'
									data-responsive_offset="on"
									data-frames='[{"delay":1450,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"600","ease":"Quint.easeOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bc:rgb(255,255,255);"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[21,21,21,21]"
									data-paddingright="[40,40,40,40]" data-paddingbottom="[21,21,21,21]" data-paddingleft="[40,40,40,40]"
									style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 600; color: #ffffff; letter-spacing: 2px;background-color:rgb(51,140,242);border-color:rgba(255,255,255,0);border-style:solid;border-width:1px 1px 1px 1px;border-radius:300px 300px 300px 300px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
									DISCOVER AVE </div>
							</li>
							<!-- SLIDE  -->
							<li data-index="rs-3" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0"
								data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
								data-thumb="http://img.youtube.com/vi/tIINXWBVMTM/maxresdefault.jpg" data-rotate="0"
								data-saveperformance="off" data-title="Virtus 2" data-param1="" data-param2="" data-param3="" data-param4=""
								data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
								data-description="">
								<!-- MAIN IMAGE -->
								<img src="https://img.youtube.com/vi/tIINXWBVMTM/maxresdefault.jpg" alt="" data-bgposition="center center"
									data-bgfit="cover" data-bgparallax="off" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- BACKGROUND VIDEO LAYER -->
								<div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-ytid="tIINXWBVMTM"
									data-videoattributes="version=3&amp;enablejsapi=1&amp;html5=1&amp;hd=1&wmode=opaque&showinfo=0&rel=0;"
									data-videorate="1" data-videowidth="100%" data-videoheight="100%" data-videocontrols="none"
									data-videoloop="none" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true"
									data-autoplayonlyfirsttime="false"></div>
								<!-- LAYER NR. 5 -->
								<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-7"
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
									data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide"
									data-responsive_offset="on"
									data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 5;background-color:rgba(0,0,0,0.32);"> </div>

								<!-- LAYER NR. 6 -->
								<h2 class="tp-caption   tp-resizeme" id="slide-3-layer-1" data-x="['center','center','center','center']"
									data-hoffset="['-2','-2','-1','-1']" data-y="['middle','middle','middle','middle']"
									data-voffset="['-189','-189','-182','-182']" data-fontsize="['100','100','100','62']"
									data-lineheight="['100','100','100','65']" data-width="none" data-height="none" data-whitespace="nowrap"
									data-type="text" data-responsive_offset="on"
									data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 6; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
									DIGITAL IDEAS </h2>

								<!-- LAYER NR. 7 -->
								<h2 class="tp-caption   tp-resizeme" id="slide-3-layer-2" data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
									data-voffset="['-95','-95','-95','-126']" data-fontsize="['100','100','100','62']"
									data-lineheight="['100','100','100','65']" data-width="none" data-height="none" data-whitespace="nowrap"
									data-type="text" data-responsive_offset="on"
									data-frames='[{"delay":1150,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 7; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
									FOR YOU. </h2>

								<!-- LAYER NR. 8 -->
								<p class="tp-caption   tp-resizeme" id="slide-3-layer-3" data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
									data-voffset="['53','53','30','5']" data-fontsize="['18','18','18','16']"
									data-lineheight="['30','30','30','28']" data-letterspacing="['0.5','0.5','0.5','0']"
									data-width="['572','572','572','441']" data-height="['none','none','none','62']" data-whitespace="normal"
									data-type="text" data-responsive_offset="on"
									data-frames='[{"delay":1300,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 8; min-width: 572px; max-width: 572px; white-space: normal; font-size: 18px; line-height: 30px; font-weight: 400; color: rgba(255,255,255,0.7); letter-spacing: 0.5px;">
									A digital marketing company that can produce applications. </p>

								<!-- LAYER NR. 9 -->
								<div class="tp-caption rev-btn  tp-resizeme" id="slide-3-layer-4"
									data-x="['center','center','center','center']" data-hoffset="['-120','-120','0','0']"
									data-y="['middle','middle','middle','middle']" data-voffset="['146','146','126','96']"
									data-letterspacing="['3','3','2','2']" data-width="none" data-height="none" data-whitespace="nowrap"
									data-type="button"
									data-actions='[{"event":"click","action":"scrollbelow","offset":"-66px","delay":"","speed":"1200","ease":"Quint.easeInOut"}]'
									data-responsive_offset="on"
									data-frames='[{"delay":1450,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"600","ease":"Quint.easeOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(52,142,245);bc:rgb(52,142,245);"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[21,21,21,21]"
									data-paddingright="[40,40,40,40]" data-paddingbottom="[21,21,21,21]" data-paddingleft="[40,40,40,40]"
									style="z-index: 9; white-space: nowrap; font-size: 13px; line-height: 17px; font-weight: 500; color: #000000; letter-spacing: 3px;background-color:rgb(255,255,255);border-color:rgba(255,255,255,0);border-style:solid;border-width:1px 1px 1px 1px;border-radius:300px 300px 300px 300px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
									DISCOVER AVE </div>

								<!-- LAYER NR. 10 -->
								<a class="tp-caption rev-btn  tp-resizeme  fresco" href="https://www.youtube.com/watch?v=A_6uV9A12ok"
									target="_blank" rel="nofollow" id="slide-3-layer-5" data-x="['center','center','center','center']"
									data-hoffset="['110','110','0','0']" data-y="['middle','middle','middle','middle']"
									data-voffset="['146','146','201','176']" data-letterspacing="['3','3','2','2']" data-width="none"
									data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"
									data-frames='[{"delay":1600,"speed":800,"frame":"0","from":"y:[100%];sX:1.15;sY:1.15;opacity:0;","to":"o:1;","ease":"Quint.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"600","ease":"Quint.easeOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bc:rgb(255,255,255);"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[21,21,21,21]"
									data-paddingright="[40,40,40,40]" data-paddingbottom="[21,21,21,21]" data-paddingleft="[40,40,40,40]"
									style="z-index: 10; white-space: nowrap; font-size: 13px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: 3px;background-color:rgba(255,255,255,0);border-color:rgba(255,255,255,0.2);border-style:solid;border-width:1px 1px 1px 1px;border-radius:300px 300px 300px 300px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">PURCHASE
									AVE </a>
							</li>
						</ul>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
					</div>
				</div><!-- END REVOLUTION SLIDER -->
				
			</section>

			<section id="features" class="vc_row pt-60 pb-30">
				<div class="container">
					<div class="row">
						
						<div class="lqd-column col-md-4 col-sm-6 mb-20">

							<div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<i class="icon-et-mobile"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3>Digital Solutions</h3>
									<p class="font-size-14 lh-185">Huge collection of elements, rich customization options, flexible layouts, and instant results!</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

						</div><!-- /.col-md-4 col-sm-6 -->
						
						<div class="lqd-column col-md-4 col-sm-6 mb-20">

							<div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<i class="icon-et-profile-male"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3>Branding Strategy</h3>
									<p class="font-size-14 lh-185">Huge collection of elements, rich customization options, flexible layouts, and instant results!</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

						</div><!-- /.col-md-4 col-sm-6 -->
						
						<div class="lqd-column col-md-4 col-sm-6 mb-20">

							<div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<i class="icon-et-mobile"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3>Logo & Identity</h3>
									<p class="font-size-14 lh-185">Huge collection of elements, rich customization options, flexible layouts, and instant results!</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

						</div><!-- /.col-md-4 col-sm-6 -->
						
						<div class="lqd-column col-md-4 col-sm-6 mb-20">

							<div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<i class="icon-et-piechart"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3>SEO & Analytics</h3>
									<p class="font-size-14 lh-185">Huge collection of elements, rich customization options, flexible layouts, and instant results!</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

						</div><!-- /.col-md-4 col-sm-6 -->
						
						<div class="lqd-column col-md-4 col-sm-6 mb-20">

							<div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<i class="icon-et-adjustments"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3>Beautiful Presentation</h3>
									<p class="font-size-14 lh-185">Huge collection of elements, rich customization options, flexible layouts, and instant results!</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

						</div><!-- /.col-md-4 col-sm-6 -->
						
						<div class="lqd-column col-md-4 col-sm-6 mb-20">

							<div class="iconbox iconbox-side iconbox-md iconbox-heading-xs">
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<i class="icon-et-mobile"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<div class="contents">
									<h3>UX Design</h3>
									<p class="font-size-14 lh-185">Huge collection of elements, rich customization options, flexible layouts, and instant results!</p>
								</div><!-- /.contents -->
							</div><!-- /.iconbox -->

						</div><!-- /.col-md-4 col-sm-6 -->

					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>

			<section id="case-studies" class="vc_row pt-50 pb-80">

				<div class="container">
					<div class="row">

						<div class="lqd-column col-md-6 col-md-offset-3">

							<header class="fancy-title text-center">
								<h2 class="h3 mb-4">Latest Projects</h2>
								<p class="font-size-17 lh-185">A digital marketing company that can produce custom-built websites and mobile applications.</p>
							</header>

						</div><!-- /.lqd-column col-md-6 col-md-offset-3 -->

					</div><!-- /.row -->
				</div><!-- /.container -->

				<div class="container-fluid px-0">
					<div class="row mx-0">

						<div class="lqd-column col-md-12 px-0">

							<div class="liquid-portfolio-list">
								<div id="virtus-pf-grid-1" class="row liquid-portfolio-list-row">

									<div class="lqd-column col-md-4 col-sm-6 col-xs-12 px-0">

										<div class="ld-pf-item ld-pf-light title-size-30 pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid pf-hover-masktext mb-0">
											<div class="ld-pf-inner">
												<div class="ld-pf-image">
													<figure data-responsive-bg="true">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/portfolio/pf-50.jpg" alt="Minnimalism">
													</figure>
												</div><!-- .ld-pf-image -->
												<div class="ld-pf-bg bg-primary opacity-08"></div>
												<div
													class="ld-pf-details"
													data-custom-animations="true"
													data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 0, "duration": 650, "delay": 100, "initValues": { "translateY": "150%" }, "animations": { "translateY": "0", "rotateX": 0 } }'>
													<div class="ld-pf-details-inner">
														<h3 class="ld-pf-title h4 font-weight-bold" data-split-text="true" data-split-options='{ "type": "words" }'>Minimalism</h3>
														<div class="ld-pf-category size-lg">
															<p data-split-text="true" data-split-options='{ "type": "words" }'>Branding Strategy</p>
														</div><!-- /.ld-pf-category -->
													</div><!-- /.ld-pf-details-inner -->
												</div><!-- /.ld-pf-details -->
												<a href="#" class="liquid-overlay-link"></a>
											</div><!-- /.ld-pf-inner -->
										</div><!-- /.ld-pf-item -->

									</div><!-- /.lqd-column col-md-4 col-sm-6 col-xs-12 -->

									<div class="lqd-column col-md-4 col-sm-6 col-xs-12 px-0">

										<div class="ld-pf-item ld-pf-light title-size-30 pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid pf-hover-masktext mb-0">
											<div class="ld-pf-inner">
												<div class="ld-pf-image">
													<figure data-responsive-bg="true">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/portfolio/pf-51.jpg" alt="Minnimalism">
													</figure>
												</div><!-- .ld-pf-image -->
												<div class="ld-pf-bg bg-primary opacity-08"></div>
												<div
													class="ld-pf-details"
													data-custom-animations="true"
													data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 0, "duration": 650, "delay": 100, "initValues": { "translateY": "150%" }, "animations": { "translateY": "0", "rotateX": 0 } }'>
													<div class="ld-pf-details-inner">
														<h3 class="ld-pf-title h4 font-weight-bold" data-split-text="true" data-split-options='{ "type": "words" }'>Minimalism</h3>
														<div class="ld-pf-category size-lg">
															<p data-split-text="true" data-split-options='{ "type": "words" }'>Branding Strategy</p>
														</div><!-- /.ld-pf-category -->
													</div><!-- /.ld-pf-details-inner -->
												</div><!-- /.ld-pf-details -->
												<a href="#" class="liquid-overlay-link"></a>
											</div><!-- /.ld-pf-inner -->
										</div><!-- /.ld-pf-item -->

									</div><!-- /.lqd-column col-md-4 col-sm-6 col-xs-12 -->

									<div class="lqd-column col-md-4 col-sm-6 col-xs-12 px-0">

										<div class="ld-pf-item ld-pf-light title-size-30 pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid pf-hover-masktext mb-0">
											<div class="ld-pf-inner">
												<div class="ld-pf-image">
													<figure data-responsive-bg="true">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/portfolio/pf-52.jpg" alt="Minnimalism">
													</figure>
												</div><!-- .ld-pf-image -->
												<div class="ld-pf-bg bg-primary opacity-08"></div>
												<div
													class="ld-pf-details"
													data-custom-animations="true"
													data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 0, "duration": 650, "delay": 100, "initValues": { "translateY": "150%" }, "animations": { "translateY": "0", "rotateX": 0 } }'>
													<div class="ld-pf-details-inner">
														<h3 class="ld-pf-title h4 font-weight-bold" data-split-text="true" data-split-options='{ "type": "words" }'>Minimalism</h3>
														<div class="ld-pf-category size-lg">
															<p data-split-text="true" data-split-options='{ "type": "words" }'>Branding Strategy</p>
														</div><!-- /.ld-pf-category -->
													</div><!-- /.ld-pf-details-inner -->
												</div><!-- /.ld-pf-details -->
												<a href="#" class="liquid-overlay-link"></a>
											</div><!-- /.ld-pf-inner -->
										</div><!-- /.ld-pf-item -->

									</div><!-- /.lqd-column col-md-4 col-sm-6 col-xs-12 -->

									<div class="lqd-column col-md-4 col-sm-6 col-xs-12 px-0">

										<div class="ld-pf-item ld-pf-light title-size-30 pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid pf-hover-masktext mb-0">
											<div class="ld-pf-inner">
												<div class="ld-pf-image">
													<figure data-responsive-bg="true">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/portfolio/pf-53.jpg" alt="Minnimalism">
													</figure>
												</div><!-- .ld-pf-image -->
												<div class="ld-pf-bg bg-primary opacity-08"></div>
												<div
													class="ld-pf-details"
													data-custom-animations="true"
													data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 0, "duration": 650, "delay": 100, "initValues": { "translateY": "150%" }, "animations": { "translateY": "0", "rotateX": 0 } }'>
													<div class="ld-pf-details-inner">
														<h3 class="ld-pf-title h4 font-weight-bold" data-split-text="true" data-split-options='{ "type": "words" }'>Minimalism</h3>
														<div class="ld-pf-category size-lg">
															<p data-split-text="true" data-split-options='{ "type": "words" }'>Branding Strategy</p>
														</div><!-- /.ld-pf-category -->
													</div><!-- /.ld-pf-details-inner -->
												</div><!-- /.ld-pf-details -->
												<a href="#" class="liquid-overlay-link"></a>
											</div><!-- /.ld-pf-inner -->
										</div><!-- /.ld-pf-item -->

									</div><!-- /.lqd-column col-md-4 col-sm-6 col-xs-12 -->

									<div class="lqd-column col-md-4 col-sm-6 col-xs-12 px-0">

										<div class="ld-pf-item ld-pf-light title-size-30 pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid pf-hover-masktext mb-0">
											<div class="ld-pf-inner">
												<div class="ld-pf-image">
													<figure data-responsive-bg="true">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/portfolio/pf-54.jpg" alt="Minnimalism">
													</figure>
												</div><!-- .ld-pf-image -->
												<div class="ld-pf-bg bg-primary opacity-08"></div>
												<div
													class="ld-pf-details"
													data-custom-animations="true"
													data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 0, "duration": 650, "delay": 100, "initValues": { "translateY": "150%" }, "animations": { "translateY": "0", "rotateX": 0 } }'>
													<div class="ld-pf-details-inner">
														<h3 class="ld-pf-title h4 font-weight-bold" data-split-text="true" data-split-options='{ "type": "words" }'>Minimalism</h3>
														<div class="ld-pf-category size-lg">
															<p data-split-text="true" data-split-options='{ "type": "words" }'>Branding Strategy</p>
														</div><!-- /.ld-pf-category -->
													</div><!-- /.ld-pf-details-inner -->
												</div><!-- /.ld-pf-details -->
												<a href="#" class="liquid-overlay-link"></a>
											</div><!-- /.ld-pf-inner -->
										</div><!-- /.ld-pf-item -->

									</div><!-- /.lqd-column col-md-4 col-sm-6 col-xs-12 -->

									<div class="lqd-column col-md-4 col-sm-6 col-xs-12 px-0">

										<div class="ld-pf-item ld-pf-light title-size-30 pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid pf-hover-masktext mb-0">
											<div class="ld-pf-inner">
												<div class="ld-pf-image">
													<figure data-responsive-bg="true">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/portfolio/pf-55.jpg" alt="Minnimalism">
													</figure>
												</div><!-- .ld-pf-image -->
												<div class="ld-pf-bg bg-primary opacity-08"></div>
												<div
													class="ld-pf-details"
													data-custom-animations="true"
													data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 0, "duration": 650, "delay": 100, "initValues": { "translateY": "150%" }, "animations": { "translateY": "0", "rotateX": 0 } }'>
													<div class="ld-pf-details-inner">
														<h3 class="ld-pf-title h4 font-weight-bold" data-split-text="true" data-split-options='{ "type": "words" }'>Minimalism</h3>
														<div class="ld-pf-category size-lg">
															<p data-split-text="true" data-split-options='{ "type": "words" }'>Branding Strategy</p>
														</div><!-- /.ld-pf-category -->
													</div><!-- /.ld-pf-details-inner -->
												</div><!-- /.ld-pf-details -->
												<a href="#" class="liquid-overlay-link"></a>
											</div><!-- /.ld-pf-inner -->
										</div><!-- /.ld-pf-item -->

									</div><!-- /.lqd-column col-md-4 col-sm-6 col-xs-12 -->

								</div><!-- /#virtus-pf-grid-1.row liquid-portfolio-list-row -->
							</div><!-- /.liquid-portfolio-list -->

						</div><!-- /.lqd-column col-md-12 -->

					</div><!-- /.row -->
				</div><!-- /.container-fluid -->

			</section>

			<section id="services" class="vc_row pt-80 pb-80">
				<div class="container">
					<div class="row d-flex flex-wrap align-items-center">
						
						<div class="lqd-column col-md-6 col-xs-12">

							<figure class="mb-5 mb-md-0">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/misc/macbook.jpg" alt="Macbook">
							</figure>

						</div><!-- /.lqd-column col-md-6 -->

						<div class="lqd-column col-md-6 col-xs-12 pl-md-6">

							<header class="fancy-title">
								<h2 class="h3 mb-4">Build and activate brands through cultural insight.</h2>
								<p class="font-size-17 lh-185">No more complex codes or boring designs. Creating an attractive and functional site has never been easier. It’s fun, fast and super-easy. Try it yourself.</p>
							</header>

							<a href="https://www.youtube.com/watch?v=YJ5q8Wrkbdw" class="btn btn-solid text-uppercase circle btn-bordered border-thin fresco font-size-12 lh-2 font-weight-semibold ltr-sp-15 px-3">
								<span>
									<span class="btn-txt">Discover Ave</span>
								</span>
							</a>

							<a href="#" target="_blank" class="btn btn-naked text-uppercase font-size-12 font-weight-semibold text-dark ml-md-3">
								<span>
									<span class="btn-txt">See what's new</span>
								</span>
							</a>

						</div><!-- /.lqd-column col-md-6 -->

					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>

			<section id="team" class="vc_row pt-80">

				<div class="container">
					<div class="row">

						<div class="lqd-column col-md-6 col-md-offset-3">

							<header class="fancy-title text-center">
								<h2 class="h3 mb-4">Trusted Support Team.</h2>
								<p class="font-size-17 lh-185">A digital marketing company that can produce custom-built websites and mobile applications.</p>
							</header>

						</div><!-- /.lqd-column col-md-6 col-md-offset-3 -->

					</div><!-- /.row -->
				</div><!-- /.container -->

				<div class="container-fluid px-0">
					<div class="row mx-0">

						<div class="lqd-column col-md-12 px-0">

							<div class="carousel-container carousel-nav-floated carousel-nav-center carousel-nav-middle carousel-nav-xl carousel-nav-solid carousel-nav-square carousel-dots-style1">

								<div class="carousel-items row mx-0" data-lqd-flickity='{"cellAlign":"center","prevNextButtons":true,"buttonsAppendTo":"self","pageDots":false,"groupCells":true,"wrapAround":true,"pauseAutoPlayOnHover":false,"navArrow":{"prev":"<i class=\"fa fa-angle-left\"></i>","next":"<i class=\"fa fa-angle-right\"></i>"}}'>

									<div class="carousel-item lqd-column col-md-3 col-sm-6 col-xs-12 px-0">

										<div class="ld-tm pos-rel text-light mb-0">
											<div class="ld-tm-img">
												<figure>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/team/team-30.jpg" alt="Judy Abott">
												</figure>
											</div>
											<div class="ld-tm-info ld-overlay d-flex flex-column align-items-center justify-content-center bg-gradient-black-transparent-bt">
												<h3 class="ld-tm-name">Judy Abbott</h3>
												<h6 class="ld-tm-pos text-uppercase">CEO</h6>
												<ul class="ld-tm-social social-icon mt-5">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="#"><i class="fa fa-github"></i></a></li>
												</ul>
											</div><!-- /.ld-tm-info -->
										</div><!-- /.ld-tm -->

									</div><!-- /.lqd-column col-md-3 col-sm-6 col-xs-12 -->

									<div class="carousel-item lqd-column col-md-3 col-sm-6 col-xs-12 px-0">

										<div class="ld-tm pos-rel text-light mb-0">
											<div class="ld-tm-img">
												<figure>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/team/team-31.jpg" alt="Judy Abott">
												</figure>
											</div>
											<div class="ld-tm-info ld-overlay d-flex flex-column align-items-center justify-content-center bg-gradient-black-transparent-bt">
												<h3 class="ld-tm-name">Judy Abbott</h3>
												<h6 class="ld-tm-pos text-uppercase">CEO</h6>
												<ul class="ld-tm-social social-icon mt-5">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="#"><i class="fa fa-github"></i></a></li>
												</ul>
											</div><!-- /.ld-tm-info -->
										</div><!-- /.ld-tm -->

									</div><!-- /.lqd-column col-md-3 col-sm-6 col-xs-12 -->

									<div class="carousel-item lqd-column col-md-3 col-sm-6 col-xs-12 px-0">

										<div class="ld-tm pos-rel text-light mb-0">
											<div class="ld-tm-img">
												<figure>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/team/team-32.jpg" alt="Judy Abott">
												</figure>
											</div>
											<div class="ld-tm-info ld-overlay d-flex flex-column align-items-center justify-content-center bg-gradient-black-transparent-bt">
												<h3 class="ld-tm-name">Judy Abbott</h3>
												<h6 class="ld-tm-pos text-uppercase">CEO</h6>
												<ul class="ld-tm-social social-icon mt-5">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="#"><i class="fa fa-github"></i></a></li>
												</ul>
											</div><!-- /.ld-tm-info -->
										</div><!-- /.ld-tm -->

									</div><!-- /.lqd-column col-md-3 col-sm-6 col-xs-12 -->

									<div class="carousel-item lqd-column col-md-3 col-sm-6 col-xs-12 px-0">

										<div class="ld-tm pos-rel text-light mb-0">
											<div class="ld-tm-img">
												<figure>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/team/team-33.jpg" alt="Judy Abott">
												</figure>
											</div>
											<div class="ld-tm-info ld-overlay d-flex flex-column align-items-center justify-content-center bg-gradient-black-transparent-bt">
												<h3 class="ld-tm-name">Judy Abbott</h3>
												<h6 class="ld-tm-pos text-uppercase">CEO</h6>
												<ul class="ld-tm-social social-icon mt-5">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="#"><i class="fa fa-github"></i></a></li>
												</ul>
											</div><!-- /.ld-tm-info -->
										</div><!-- /.ld-tm -->

									</div><!-- /.lqd-column col-md-3 col-sm-6 col-xs-12 -->

									<div class="carousel-item lqd-column col-md-3 col-sm-6 col-xs-12 px-0">

										<div class="ld-tm pos-rel text-light mb-0">
											<div class="ld-tm-img">
												<figure>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/team/team-31.jpg" alt="Judy Abott">
												</figure>
											</div>
											<div class="ld-tm-info ld-overlay d-flex flex-column align-items-center justify-content-center bg-gradient-black-transparent-bt">
												<h3 class="ld-tm-name">Judy Abbott</h3>
												<h6 class="ld-tm-pos text-uppercase">CEO</h6>
												<ul class="ld-tm-social social-icon mt-5">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="#"><i class="fa fa-github"></i></a></li>
												</ul>
											</div><!-- /.ld-tm-info -->
										</div><!-- /.ld-tm -->

									</div><!-- /.lqd-column col-md-3 col-sm-6 col-xs-12 -->

								</div><!-- /.carousel-items row -->

							</div><!-- /.carousel-container -->

						</div><!-- /.lqd-column col-md-12 -->

					</div><!-- /.row -->
				</div><!-- /.container-fluid -->

			</section>

			<section class="vc_row pt-50 pb-20 bg-shark mb-60">
				<div class="container">
					<div class="row d-flex flex-wrap align-items-center">

						<div class="lqd-column col-md-3 col-xs-6 text-center">

							<div class="liquid-counter liquid-counter-default liquid-counter-md liquid-counter-has-hover-gradient">
								<div class="liquid-counter-element mb-3 " data-enable-counter="true" data-counter-options='{"targetNumber":"300K","blurEffect":true}'>
									<div class="liquid-counter-element liquid-counter-element-hover">
										<span>300K</span>
									</div><!-- /.liquid-counter-element -->
									<span class="text-white">300K</span>
								</div><!-- /.liquid-counter-elmeent -->
								<span class="liquid-counter-text liquid-text-bottom text-fade-white-06 font-size-15 ">GLOBAL BRANDS</span>
							</div><!-- /.liquid-counter -->

						</div><!-- /.lqd-column col-md-3 col-md-6 -->

						<div class="lqd-column col-md-3 col-xs-6 text-center">

							<div class="liquid-counter liquid-counter-default liquid-counter-md liquid-counter-has-hover-gradient">
								<div class="liquid-counter-element mb-3 " data-enable-counter="true" data-counter-options='{"targetNumber":"1000+","blurEffect":true}'>
									<div class="liquid-counter-element liquid-counter-element-hover">
										<span>1000+</span>
									</div><!-- /.liquid-counter-element -->
									<span class="text-white">1000+</span>
								</div><!-- /.liquid-counter-elmeent -->
								<span class="liquid-counter-text liquid-text-bottom text-fade-white-06 font-size-15 ">HAPPY CLIENTS</span>
							</div><!-- /.liquid-counter -->

						</div><!-- /.lqd-column col-md-3 col-md-6 -->

						<div class="lqd-column col-md-3 col-xs-6 text-center">

							<div class="liquid-counter liquid-counter-default liquid-counter-md liquid-counter-has-hover-gradient">
								<div class="liquid-counter-element mb-3 " data-enable-counter="true" data-counter-options='{"targetNumber":"400+","blurEffect":true}'>
									<div class="liquid-counter-element liquid-counter-element-hover">
										<span>400+</span>
									</div><!-- /.liquid-counter-element -->
									<span class="text-white">400+</span>
								</div><!-- /.liquid-counter-elmeent -->
								<span class="liquid-counter-text liquid-text-bottom text-fade-white-06 font-size-15 ">GLOBAL BRANDS</span>
							</div><!-- /.liquid-counter -->

						</div><!-- /.lqd-column col-md-3 col-md-6 -->

						<div class="lqd-column col-md-3 col-xs-6 text-center">

							<div class="liquid-counter liquid-counter-default liquid-counter-md liquid-counter-has-hover-gradient">
								<div class="liquid-counter-element mb-3 " data-enable-counter="true" data-counter-options='{"targetNumber":"700%","blurEffect":true}'>
									<div class="liquid-counter-element liquid-counter-element-hover">
										<span>700%</span>
									</div><!-- /.liquid-counter-element -->
									<span class="text-white">700%</span>
								</div><!-- /.liquid-counter-elmeent -->
								<span class="liquid-counter-text liquid-text-bottom text-fade-white-06 font-size-15 ">HAPPY CLIENTS</span>
							</div><!-- /.liquid-counter -->

						</div><!-- /.lqd-column col-md-3 col-md-6 -->

					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>

			<section class="vc_row pt-100 pb-55">
				<div class="container">
					<div class="row">

						<div class="lqd-column col-md-5 mb-5 mb-md-0">

							<header class="fancy-title">
								<h2 class="h3 mb-4">Experienced Team.</h2>
								<p class="font-size-17 lh-185">No more complex codes or boring designs. Creating an attractive and functional site has never been easier. It’s fun, fast and super-easy!</p>
							</header>

						</div><!-- /.lqd-column col-md-5 -->

						<div class="lqd-column col-md-6 col-md-offset-1">

							<div class="liquid-progressbar liquid-progressbar-sm liquid-progressbar-circle" data-progressbar="true" data-progressbar-options='{"value":90,"suffix":"%"}'>
								<div class="liquid-progressbar-inner">
									<span class="liquid-progressbar-bar">
										<span class="liquid-progressbar-percentage font-size-12 text-uppercase ltr-sp-2 text-black"></span>
									</span>
								</div><!-- /.liquid-progressbar-inner -->
								<div class="liquid-progressbar-details">
									<h3 class="liquid-progressbar-title font-size-12 text-uppercase ltr-sp-2 text-black">Web Design</h3>
								</div><!-- /.liquid-progressbar-details -->
							</div><!-- /.liquid-progressbar -->

							<div class="liquid-progressbar liquid-progressbar-sm liquid-progressbar-circle" data-progressbar="true" data-progressbar-options='{"value":80,"suffix":"%"}'>
								<div class="liquid-progressbar-inner">
									<span class="liquid-progressbar-bar">
										<span class="liquid-progressbar-percentage font-size-12 text-uppercase ltr-sp-2 text-black"></span>
									</span>
								</div><!-- /.liquid-progressbar-inner -->
								<div class="liquid-progressbar-details">
									<h3 class="liquid-progressbar-title font-size-12 text-uppercase ltr-sp-2 text-black">Graphic Design</h3>
								</div><!-- /.liquid-progressbar-details -->
							</div><!-- /.liquid-progressbar -->

							<div class="liquid-progressbar liquid-progressbar-sm liquid-progressbar-circle" data-progressbar="true" data-progressbar-options='{"value":70,"suffix":"%"}'>
								<div class="liquid-progressbar-inner">
									<span class="liquid-progressbar-bar">
										<span class="liquid-progressbar-percentage font-size-12 text-uppercase ltr-sp-2 text-black"></span>
									</span>
								</div><!-- /.liquid-progressbar-inner -->
								<div class="liquid-progressbar-details">
									<h3 class="liquid-progressbar-title font-size-12 text-uppercase ltr-sp-2 text-black">Typography</h3>
								</div><!-- /.liquid-progressbar-details -->
							</div><!-- /.liquid-progressbar -->

						</div><!-- /.col-md-6 col-md-offset-1 -->
						
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>

			<section class="vc_row pt-190 pb-150 mt-60 bg-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/demo/bg/bg-55.jpg);">
				<div class="container">
					<div class="row">
	
						<div class="lqd-column col-md-12">
	
							<div class="carousel-container carousel-nav-left px-md-5 mx-md-5">
	
								<div class="row">
	
									<div class="col-md-2 col-xs-6 col-xs-offset-3 col-md-offset-0 mb-4 mb-md-0">
	
										<div class="carousel-items row testimonials-details w-100 row" data-lqd-flickity='{ "asNavFor": ".carousel-quotes-1", "rightToLeft": true }'>
	
											<div class="col-xs-12">
												<div class="testimonial testimonial-lg testimonial-details-sm text-right testimonials-details-only ">
													<div class="testimonial-details">
														<figure class="avatar w-100">
															<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/testimonials/testi-14.jpg" alt="Ivana Jones" />
														</figure>
													</div>
												</div>
											</div><!-- /.col-md-12 -->
	
											<div class="col-xs-12">
												<div class="testimonial testimonial-lg testimonial-details-sm text-right testimonials-details-only ">
													<div class="testimonial-details">
														<figure class="avatar w-100">
															<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/testimonials/testi-14.jpg" alt="Ivana Jones" />
														</figure>
													</div><!-- /.testimonial-details -->
												</div><!-- /.testimonial -->
											</div><!-- /.col-md-12 -->
	
											<div class="col-xs-12">
												<div class="testimonial testimonial-lg testimonial-details-sm text-right testimonials-details-only ">
													<div class="testimonial-details">
														<figure class="avatar w-100">
															<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/testimonials/testi-14.jpg" alt="Ivana Jones" />
														</figure>
													</div><!-- /.testimonial-details -->
												</div><!-- /.testimonial -->
											</div><!-- /.col-md-12 -->
	
										</div><!-- /.carousel-items -->
	
									</div><!-- /.col-md-2 -->
	
									<div class="col-md-10 col-xs-12 pl-md-4">
	
										<div class="carousel-items row testimonials-quotes row carousel-quotes-1 carousel-nav-light carousel-nav-hover-light carousel-nav-border-none" data-lqd-flickity='{ "prevNextButtons": true, "navStyle": 1, "navOffsets": { "nav": { "left": 15 } }, "rightToLeft": true }'>
	
											<div class="col-xs-12">
												<div class="testimonial testimonial-lg testimonial-details-sm text-left testimonials-quote-only mb-10">
													<div class="testimonial-quote">
														<blockquote class="font-size-19 lh-2 text-fade-white-08">
															<p>“Holy sh*tballs, what have you created? This is a game-changing theme! The level of functionality and detail is incredible. Being able to control the margins and padding for various elements across different devices is something I've been waiting for.”</p>
														</blockquote>
														<h6 class="mt-30 font-size-16 text-white">Alexander, CEO of Founder</h6>
													</div><!-- /.testimonial-quote -->
												</div><!-- /.testimonial -->
											</div><!-- /.col-xs-12 -->
	
											<div class="col-xs-12">
												<div class="testimonial testimonial-lg testimonial-details-sm text-left testimonials-quote-only mb-10">
													<div class="testimonial-quote">
														<blockquote class="font-size-19 lh-2 text-fade-white-08">
															<p>“Holy sh*tballs, what have you created? This is a game-changing theme! The level of functionality and detail is incredible. Being able to control the margins and padding for various elements across different devices is something I've been waiting for.”</p>
														</blockquote>
														<h6 class="mt-30 font-size-16 text-white">Alexander, CEO of Founder</h6>
													</div><!-- /.testimonial-quote -->
												</div><!-- /.testimonial -->
											</div><!-- /.col-xs-12 -->
	
											<div class="col-xs-12">
												<div class="testimonial testimonial-lg testimonial-details-sm text-left testimonials-quote-only mb-10">
													<div class="testimonial-quote">
														<blockquote class="font-size-19 lh-2 text-fade-white-08">
															<p>“Holy sh*tballs, what have you created? This is a game-changing theme! The level of functionality and detail is incredible. Being able to control the margins and padding for various elements across different devices is something I've been waiting for.”</p>
														</blockquote>
														<h6 class="mt-30 font-size-16 text-white">Alexander, CEO of Founder</h6>
													</div><!-- /.testimonial-quote -->
												</div><!-- /.testimonial -->
											</div><!-- /.col-xs-12 -->
	
										</div><!-- /.carousel-items -->
	
									</div><!-- /.col-md-8 -->
	
								</div><!-- /.row -->
								
							</div><!-- /.carousel-container -->
	
						</div><!-- /.lqd-column col-md-12 -->
	
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>

			<section class="vc_row pt-65 pb-115">

				<div class="container">
					<div class="row">

						<div class="lqd-column col-md-12">

							<div class="carousel-container carousel-nav-left carousel-nav-md carousel-dots-style1">

								<div class="carousel-items row" data-lqd-flickity='{"cellAlign":"left","prevNextButtons":false,"buttonsAppendTo":"self","pageDots":false,"groupCells":false,"wrapAround":true,"autoPlay":3000,"pauseAutoPlayOnHover":false}'>

									<div class="lqd-column carousel-item  col-md-2 col-sm-3 col-xs-4">
										<figure class="text-center opacity-02 reset-opacity-onhover">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/clients/client-1.png" class="mt-10 w-60" alt="Client">
										</figure>
									</div><!-- /.carousel-item -->
									<div class="lqd-column carousel-item  col-md-2 col-sm-3 col-xs-4">
										<figure class="text-center opacity-02 reset-opacity-onhover">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/clients/client-2.png" class="mt-10 w-60" alt="Client">
										</figure>
									</div><!-- /.carousel-item -->
									<div class="lqd-column carousel-item  col-md-2 col-sm-3 col-xs-4">
										<figure class="text-center opacity-02 reset-opacity-onhover">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/clients/client-3.png" class="mt-10 w-60" alt="Client">
										</figure>
									</div><!-- /.carousel-item -->
									<div class="lqd-column carousel-item  col-md-2 col-sm-3 col-xs-4">
										<figure class="text-center opacity-02 reset-opacity-onhover">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/clients/client-4.png" class="w-60" alt="Client">
										</figure>
									</div><!-- /.carousel-item -->
									<div class="lqd-column carousel-item  col-md-2 col-sm-3 col-xs-4">
										<figure class="text-center opacity-02 reset-opacity-onhover">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/clients/client-5.png" class="w-60" alt="Client">
										</figure>
									</div><!-- /.carousel-item -->
									<div class="lqd-column carousel-item  col-md-2 col-sm-3 col-xs-4">
										<figure class="text-center opacity-02 reset-opacity-onhover">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/clients/client-6.png" class="mt-10 w-60" alt="Client">
										</figure>
									</div><!-- /.carousel-item -->
									<div class="lqd-column carousel-item  col-md-2 col-sm-3 col-xs-4">
										<figure class="text-center opacity-02 reset-opacity-onhover">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/clients/client-4.png" class="w-60" alt="Client">
										</figure>
									</div><!-- /.carousel-item -->
									<div class="lqd-column carousel-item  col-md-2 col-sm-3 col-xs-4">
										<figure class="text-center opacity-02 reset-opacity-onhover">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/clients/client-5.png" class="w-60" alt="Client">
										</figure>
									</div><!-- /.carousel-item -->
									<div class="lqd-column carousel-item  col-md-2 col-sm-3 col-xs-4">
										<figure class="text-center opacity-02 reset-opacity-onhover">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/demo/clients/client-6.png" class="mt-10 w-60" alt="Client">
										</figure>
									</div><!-- /.carousel-item -->

								</div><!-- /.carousel-items row -->

							</div><!-- /.carousel-container -->

						</div><!-- /.col-md-12 -->

					</div><!-- /.row -->
				</div><!-- /.container -->

			</section>

			<section id="blog" class="vc_row pt-45 pb-100">
				<div class="container">
					<div class="row">
	
						<div class="lqd-column col-md-6 col-md-offset-3 px-md-5">

							<header class="fancy-title text-center">
								<h2 class="h3 mb-4">Latest Stories</h2>
								<p class="font-size-17 lh-185">A digital marketing company that can produce custom-built websites and mobile applications.</p>
							</header>

						</div><!-- /.lqd-column col-md-6 col-md-offset-3 -->
	
						<div class="row">
	
							<div class="lqd-column col-md-12">
	
								<div class="liquid-blog-grid liquid-blog-style-square row mx-0" data-liquid-masonry="true">
	
									<div class="lqd-column col-md-4 masonry-item px-0">
	
										<article class="liquid-lp liquid-lp liquid-blog-item liquid-blog-item-gray liquid-blog-scheme-dark">
	
											<div class="liquid-blog-item-inner">
	
												<a href="#" class="liquid-overlay-link">Anything is possible in this world!</a>
											
												<header class="liquid-lp-header">
													<h2 class="liquid-lp-title font-weight-normal mb-1">
														<a href="#">Anything is possible in this world!</a>
													</h2>
												</header>
	
												<div class="liquid-lp-excerpt">
													<p>“Success is the result of perfection, hard work, learning from failure, loyalty, and persistence” Colin Powell Let me</p>
												</div><!-- /.latest-post-excerptc -->
	
												<footer class="liquid-lp-footer">
													<div class="ld-post-author">
														<figure>
															<img class="circle" src="<?php echo get_template_directory_uri(); ?>/assets/demo/testimonials/testi-2.png" alt="Suke Alex">
														</figure>
														<div class="ld-author-info">
															<time class="liquid-lp-date text-uppercase ltr-sp-1 my-0" datetime="2019-09-18">Sep, 18</time>
															<h5 class="text-uppercase ltr-sp-2 my-0">Suke Alex</h5>
														</div><!-- /.ld-author-info -->
													</div>
												</footer>
	
											</div><!-- /.liquid-blog-item-inner -->
	
										</article>
	
									</div><!-- /.col-md-4 -->
		
									<div class="lqd-column col-md-4 masonry-item px-0">
	
										<article class="liquid-lp liquid-lp liquid-blog-item liquid-blog-item-gray liquid-blog-scheme-dark">
	
											<div class="liquid-blog-item-inner">
	
												<a href="#" class="liquid-overlay-link">Helen Keller: A teller and a seller</a>
											
												<header class="liquid-lp-header">
													<h2 class="liquid-lp-title font-weight-normal mb-1">
														<a href="#">Helen Keller: A teller and a seller</a>
													</h2>
												</header>
	
												<div class="liquid-lp-excerpt">
													<p>Never ever think of giving up. Winners never quit and quitters never win. Take all negative words out.</p>
												</div><!-- /.latest-post-excerptc -->
	
												<footer class="liquid-lp-footer">
													<div class="ld-post-author">
														<figure>
															<img class="circle" src="<?php echo get_template_directory_uri(); ?>/assets/demo/testimonials/testi-2.png" alt="Suke Alex">
														</figure>
														<div class="ld-author-info">
															<time class="liquid-lp-date text-uppercase ltr-sp-1 my-0" datetime="2019-09-18">Sep, 18</time>
															<h5 class="text-uppercase ltr-sp-2 my-0">Suke Alex</h5>
														</div><!-- /.ld-author-info -->
													</div>
												</footer>
	
											</div><!-- /.liquid-blog-item-inner -->
	
										</article>
	
									</div><!-- /.col-md-4 -->
		
									<div class="lqd-column col-md-4 masonry-item px-0">
	
										<article class="liquid-lp liquid-lp liquid-blog-item liquid-blog-item-gray liquid-blog-scheme-dark">
	
											<div class="liquid-blog-item-inner">
	
												<a href="#" class="liquid-overlay-link">Next-generation site builder</a>
											
												<header class="liquid-lp-header">
													<h2 class="liquid-lp-title font-weight-normal mb-1">
														<a href="#">Next-generation site builder</a>
													</h2>
												</header>
	
												<div class="liquid-lp-excerpt">
													<p>The goal of every tourist booking is to turn potential leads into guests.</p>
												</div><!-- /.latest-post-excerptc -->
	
												<footer class="liquid-lp-footer">
													<div class="ld-post-author">
														<figure>
															<img class="circle" src="<?php echo get_template_directory_uri(); ?>/assets/demo/testimonials/testi-2.png" alt="Suke Alex">
														</figure>
														<div class="ld-author-info">
															<time class="liquid-lp-date text-uppercase ltr-sp-1 my-0" datetime="2019-09-18">Sep, 18</time>
															<h5 class="text-uppercase ltr-sp-2 my-0">Suke Alex</h5>
														</div><!-- /.ld-author-info -->
													</div>
												</footer>
	
											</div><!-- /.liquid-blog-item-inner -->
	
										</article>
	
									</div><!-- /.col-md-4 -->
									
								</div><!-- /.row -->
	
							</div><!-- /.col-md-12 -->
	
						</div><!-- /.row -->
						
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>

			<section id="contact" class="vc_row pt-90 pb-90 mt-20 bg-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/demo/bg/bg-52.jpg);" data-parallax="true" data-parallax-options='{"parallaxBG": true}'>
				<div class="container">
					<div class="row d-flex flex-wrap align-items-center">
	
						<div class="lqd-column col-md-8 pr-md-5">
	
							<div class="ld-fancy-heading">
								<h2
									class="text-white text-center text-md-left"
									data-fittext="true"
									data-fittext-options='{"compressor":0.55,"maxFontSize":"44","minFontSize":"35"}'
									data-split-text="true"
									data-custom-animations="true"
									data-ca-options='{"triggerHandler":"inview","animationTarget":".split-inner","duration":"1200","delay":"40","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'
									data-split-options='{"type":"words"}'>
									<span class="ld-fh-txt">We enjoy building experiences. Come and join us.</span>
								</h2>
							</div><!-- /.ld-fancy-heading -->
	
						</div><!-- /.col-md-8 -->
	
						<div class="lqd-column col-md-4 text-center">
							
							<a
								href="#"
								class="btn btn-solid btn-md semi-round btn-gradient px-4 font-size-15 lh-2 btn-white text-hover-white circle font-weight-bold text-uppercase ltr-sp-15"
								data-localscroll="true"
								data-localscroll-options='{"scrollBelowSection": true}'>
								<span>
									<span class="btn-txt">Join to download</span>
									<span class="btn-gradient-bg btn-gradient-bg-hover"></span>
								</span>
							</a>
	
						</div><!-- /.col-md-4 -->
	
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			
		</main><!-- /#content.content -->
<?php get_footer(); ?>