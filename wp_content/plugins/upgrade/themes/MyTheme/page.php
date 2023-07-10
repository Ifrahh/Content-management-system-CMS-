<?php get_header(); ?>
<div id="body_content"> 
<div id="left_side"> 
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="single_page_box">

<div class="post_title" >
<h2><a href=" <?php the_permalink(); ?> "> <?php the_title(); ?> </a> </h2>
</div> <!-- end of post title -->



<div class="single_page_content">
<?php the_content(); ?> 

</div> <!--end of post content-->

<div class="post_category">
<?php the_category(); ?>
</div> <!--end of post category-->

<div class="post_date">
<?php the_date(); ?>
</div> <!--end of post date-->





</div> <!--end of post box -->
<?php endwhile;else: ?>
<p> No Posts Found </p>
<?php endif; ?>

</div> <!--End of left side -->


<div id="right_side">
<?php dynamic_sidebar('Right Sidebar'); ?>
</div> <!--end of right side -->

 </div> <!-- end of vody_content -->

<?php get_footer(); ?>