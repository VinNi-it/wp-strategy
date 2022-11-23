<?php get_header(); ?>


<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
	


    <section class="templateux-hero"  data-scrollax-parent="true">
      <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="images/hero_2.jpg" /></div> -->

      <div class="container">
        <div class="row align-items-center justify-content-center intro">
          <div class="col-md-10" data-aos="fade-up">
            <h1><?php the_title(); ?></h1>
            <a href="#next" class="go-down js-smoothscroll"></a>
          </div>
        </div>
      </div>
    </section>
    <!-- END templateux-hero -->


        <?php the_content(); ?>
<!-- вся страница реализована в класическом редакторе в вордпресс(копированием кода) и подтягивается контентом (можно реалзовать полями как в блоге) -->



<?php } } else { ?>
	
<?php } ?>


<?php get_footer(); ?>