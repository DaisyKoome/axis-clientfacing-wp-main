<?php
/**
 *
 * Template Name: Webinars
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Axis
 */

get_header(); ?>


<section class="fill-inner"></section>
<section class="inside-pages-topper">
  <h2 class="centre"><?php echo the_title(); ?></h2>
</section>

<section style="padding-bottom: 50px;">
  <div class="wrapper">
	  <div class="laptops">
                 <ul>

                 <?php
                    $args = array(
                        'post_type' => 'webinars',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                    );
                    
                    $query = new WP_Query( $args ); ?>

                    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

                     <li>
                         <div class="pic-wrapper">
							 <a target="_blank" href="<?php echo the_field('webinar_link'); ?>">
                             <img src="https://clients.belva.co.ke/axis/wp-content/uploads/2022/03/—Pngtree—yellow-play-button_854581.png" alt="<?php echo the_title(); ?>">
							 </a>
                         </div>
                         <div class="content" style="height: 120px;" >
<!--                           <div class="date tbl">
                              <span class=" col left">PRODUCTIVITY</span>
                              <span class=" col right">3 days ago</span>
                          </div> -->
                           <a target="_blank" href="<?php echo the_field('webinar_link'); ?>">
                          <span class="captn"><?php echo the_title(); ?></span>
                          
                           <span class="left" ><span style="padding-top: 13px;" class="primary-btn transparent-btn">Play Video</span></span>
                             </a>
                         </div>
                     </li>

                     <?php endwhile; ?> 

                 </ul>
             </div>
     
  </div>
</section>

<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>