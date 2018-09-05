<?php get_header(); ?>
    
    
	<!-- Slider
		============================= -->
	<div id="slider" class="theme-default">
        <div class="inner">
            
        	<div class="nivo-slider nivoSlider">
                <?php query_posts('posts_per_page=-1&category_name=slider'); ?>
                <?php if (have_posts()):while(have_posts()):the_post(); ?>
               
                    <?php the_post_thumbnail('slider_image'); ?>
                <?php endwhile;endif; ?>
                
               
            </div>
              
        </div><!-- .inner -->
	</div><!-- #slider -->
	<!-- End Slider -->
    
    
	<!-- Services
		============================= -->
	<div id="services">
        <div class="inner">
        
        	<h2>Our Services</h2>
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
                <?php query_posts('posts_per_page=1&category_name=servicios'); ?>
                <?php if (have_posts()):while(have_posts()):the_post(); ?>
            	<li>
                	<span class="li_pen"></span>
                    <h4>Custom Design</h4>
                    <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
                </li>
                <?php endwhile;endif; ?>
                
                <!--<li>
                	<span class="li_bulb"></span>
                    <h4>Inovative Ideas</h4>
                    <p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>
                </li>
                
                
                <li>
                	<span class="li_heart"></span>
                    <h4>Love Is The Answer</h4>
                    <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
                </li>
                
                
                <li>
                	<span class="li_phone"></span>
                    <h4>Responsive Layout</h4>
                    <p>Sed porttitor placerat rhoncus. In at nunc tellus. Maecenas blandit nunc ligula. Praesent elit leo.</p>
                </li>
                
                
                <li>
                	<span class="li_bubble"></span>
                    <h4>24 / 7 Support</h4>
                    <p>Vivamus vel quam lacinia, tincidunt dui non, vehicula nisi. Nulla a sem erat. Pellentesque egestas venenatis lorem .</p>
                </li>
                
                
                <li>
                	<span class="li_star"></span>
                    <h4>Feel Like A Star</h4>
                    <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus.</p>
                </li>-->
            </ul>
            
        </div><!-- .inner -->
	</div><!-- #services -->
	<!-- End Services -->
    
    
	<!-- Portfolio
		============================= -->
	<div id="portfolio">
        <div class="inner">
        
        	<h2>Portfolio</h2>
            <h3>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h3>
            
            <!-- Portfolio Menu -->

            <ul class="portfolio-menu filter">
            	<li class="current all"><a href="#">All</a></li>
               <!--<?php foreach(get_tags() as $tag): ?>
                    <li class="<?php echo $tag->slug; ?>"><a href="#"><?php echo $tag->name; ?></a></li>
               <?php endforeach; ?>-->
                <li class="webdesign"><a href="#">Web Design</a></li>
                <li class="graphicdesign"><a href="#">Graphic Design</a></li>
                <li class="artwork"><a href="#">Artwork</a></li>
            </ul><!-- .portfolio-menu -->
            
            <!-- Portfolio -->
            <ul class="portfolio">
                <?php query_posts('posts_per_page=-1&category_name=portafolio'); ?>
                <?php if (have_posts()):while(have_posts()):the_post(); ?>
            	<li data-id="id-<?php the_ID();?>" data-type="<?php echo @get_the_tags()[0]->slug; ?>">
                    <a href="<?php echo get_the_post_thumbnail_url(null,'portafolio-full'); ?>" rel="prettyPhoto[portfolio]">
                       <!-- <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img1.jpg" width="220" height="187" alt="#" />-->
                       <?php the_post_thumbnail('portafolio-thumbnail'); ?>
                    </a>
                </li>
            <?php endwhile;endif; ?>
                
            	<!----<<li data-id="id-2" data-type="graphicdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img2.jpg" width="220" height="187" alt="#" />
                    </a>
                </li>
                
            	<li data-id="id-3" data-type="webdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img3.jpg" width="220" height="187" alt="#" />
                    </a>
                </li>
                
            	<li data-id="id-4" data-type="artwork">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img4.jpg" width="220" height="187" alt="#" />
                    </a>
                </li>
                
            	<li data-id="id-5" data-type="graphicdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img5.jpg" width="220" height="187" alt="#" />
                    </a>
                </li>
                
            	<li data-id="id-6" data-type="artwork">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img6.jpg" width="220" height="187" alt="#" />
                    </a>
                </li>
                
            	<li data-id="id-7" data-type="webdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img7.jpg" width="220" height="187" alt="#" />
                    </a>
                </li>
                
            	<li data-id="id-8" data-type="graphicdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img8.jpg" width="220" height="187" alt="#" />
                    </a>
                </li>
                
            	<li data-id="id-9" data-type="artwork">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img9.jpg" width="220" height="187" alt="#" />
                    </a>
                </li>
                
            	<li data-id="id-10" data-type="graphicdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img10.jpg" width="220" height="187" alt="#" />
                    </a>
                </li>
                
            	<li data-id="id-11" data-type="webdesign">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img11.jpg" width="220" height="187" alt="#" />
                    </a>
                </li>
                
            	<li data-id="id-12" data-type="artwork">
                    <a href="http://farm4.staticflickr.com/3712/9032543579_1217e6566b_b.jpg" rel="prettyPhoto[portfolio]">
                        <img src="<?php bloginfo('template_url') ?>/images/thumbnails/img12.jpg" width="220" height="187" alt="#" />
                    </a>
                </li>-->
                
            </ul><!--.portfolio -->
            
        </div><!-- .inner -->
	</div><!-- #portfolio -->
	<!-- End Portfolio -->
    
    
	<!-- About
		============================= -->
	<div id="about">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>About Us</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <!-- Profile -->
            <ul>

                <?php query_posts('posts_per_page=3&post_type=perfil'); ?>
                <?php if (have_posts()):while(have_posts()):the_post(); ?>
            	<li>
                	<?php the_post_thumbnail('avatar'); ?>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                    <?php get_post_meta(get_the_ID() ,'twitter', true ); ?>
                    <a href=""><span class="icon-facebook"></span></a>
                    <a href=""><span class="icon-gplus"></span></a>
                   <?php $redes = ['facebook', 'gplus', 'twitter', 'linkedin', 'behance', 'instagram']; ?>
                    <?php foreach($redes as $red): ?>
                    <?php if(get_post_meta(get_the_ID(), $red, true)): ?>
                        <a href="<?php echo get_post_meta(get_the_ID(), $red, true); ?>">
                            <span class="icon-<?php echo $red; ?>"></span>
                        </a>
                    <?php endif; ?>
                    <?php endforeach; ?>

<!--Añadir comentario

Entrada de mensaje

Enviar mensaje a front-end-g8-->
                    <a href=""><span class="icon-linkedin"></span></a>
                </li>
                <?php endwhile; endif; ?> 
            </ul><!-- .portfolio-menu -->
            
        </div><!-- .inner -->
	</div><!-- #about -->
	<!-- End About -->
    
    
	<!-- Contact
		============================= -->
	<div id="contact">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>Get a Quote</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
            	<li>
                	<form action="" method="get">
                    	
                        <input name="Name" class="" type="text" value="Name (Required)" onfocus="if(this.value == 'Name (Required)') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name (Required)'; }" />
                        
                        <input name="Email" class="" type="text" value="Email (Required)" onfocus="if(this.value == 'Email (Required)') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Email (Required)'; }" />
                        
                        <input name="Subject" class="" type="text" value="Subject" onfocus="if(this.value == 'Subject') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Subject'; }" />
                        
                        <textarea name="Detail" cols="" rows="" onfocus="if(this.value == 'Describe your project in detail...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Describe your project in detail...'; }">Describe your project in detail...</textarea>
                        
                        <input type="submit" value="submit" name="subscribe" class="submitbtn" />
                        
                    </form>
                </li>
                
                <li>
                	<h4>Contact Information</h4>
                    <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis.</p>
                    
                    <span><i class="li_location"></i>Elm St. 14/05 Lost City </span>
                    <span><i class="icon-phone"></i>03528 331 86 35 </span>
                    <span><i class="icon-mail"></i>info@singolo.com</span>
                </li>
            </ul>
            
            
        </div><!-- .inner -->
	</div><!-- #contact -->
	<!-- End Contact -->
    
<?php get_header(); ?>
	


















