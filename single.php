<?php get_header(); ?>


<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
	

		<section class="templateux-hero"  data-scrollax-parent="true">
			<!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="images/hero_2.jpg" /></div> -->

			<div class="container">
				<div class="row align-items-center justify-content-center intro">
					<div class="col-md-12" data-aos="fade-up">
						<div class="post-meta">
							<span>Posted in <?php echo get_the_date('F j, Y H:i:s'); ?></span> 
							<span class="sep">&bullet;</span>
							<span>Posted by <?php the_author(); ?></span>  
						</div>
						<h1><?php the_title(); ?></h1>
						
						<a href="#next" class="go-down js-smoothscroll"></a>
						
					</div>
				</div>
			</div>
		</section>
		<!-- END templateux-hero -->


		<section class="templateux-portfolio-overlap mb-5" id="next">
			<div id="blog" class="site-section">
			<div class="container">
				
						<div class="row">

							<div class="col-md-8">
							<p class="mb-5"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid"></p>
								<div>

										<?php the_content('', true ); ?>
									
								</div>
								

								<div class="pt-5 mt-5">
									<?php 

										$post_id = get_the_ID();
									
										$comments_count = wp_count_comments($post_id);

										?>
											<h3 class="mb-5"><?php echo $comments_count->total_comments . " Comments"; ?></h3>
										<?php
										
									
									?>
									<?php comments_template(); ?>
									<?php comment_form(); ?>
								</div>

							</div> <!-- .col-md-8 -->
							<div class="col-md-4 sidebar pl-md-5">
								<div class="sidebar-box">
									<?php echo get_avatar($comment, 317); ?>
									<h3>About The Author</h3>
									<p>My Name: <?php echo get_author_name(); ?></p>
									<p>
										<?php 

											the_author_meta('description');
										
										?></p>
								</div>

								<div class="sidebar-box">
									<h3>Tags</h3>
									<div class="tagcloud">
										<?php the_tags('','',''); ?>
									</div>
								</div>

								<div class="sidebar-box">
                					 <h3>Paragraph</h3>
             					     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
             				   </div>

							</div>

						</div>

						
					</div>
			</div>

		</section>


<?php } } else { ?>
	
<?php } ?>


<?php get_footer(); ?>