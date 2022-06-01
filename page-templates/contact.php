<?php
/**
 *
 * Template Name: Contact Us
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

<section class="fill-inner">
<!-- <h2 class="centre">Contact Us</h2> -->
</section>
<section class="inside-pages-topper">
<h2 class="centre">Contact Us</h2>
</section>


<section class="conts padding-top-bottom">
    <!-- contact-form -->
    <div class="wrapper">
        <?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
    </div>

    <!-- contact-form end -->
</section>

<section class="communication padding-top">
    <div class="wrapper">
         <div class="comm">
             <div class="tbl">
                 <div class="col left">
                     <img src="<?php echo home_url('/'); ?>wp-content/uploads/2022/03/communication.png" class="talk">
                 </div>
                 <div class="col right">
                     <h2>Keep all communications in one place </h2>
                     <p>Trusted by more than 100+ businesses. Sign up
                       for free today and simplify customer engagement.
                     </p>
                     <div class="btn-side">
                         <button class="btn primary-btn">Get Started</button>
                         <button class="btn primary-btn blue">Request Demo</button>
                     </div>
                     
                     <p class="set-up">Easy setup · Cancel any time. Check out <a href="#">Terms of Use.</a></p>

                 </div>
             </div>
         </div>
    </div>

</section>


<?php get_footer(); ?>