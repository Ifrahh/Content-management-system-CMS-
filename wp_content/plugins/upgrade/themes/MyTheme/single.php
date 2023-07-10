<?php get_header(); ?>
<div id="body_content"> 
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="single_post_box">

<div class="post_title" >
<h2><a href=" <?php the_permalink(); ?> "> <?php the_title(); ?> </a> </h2>

</div> <!-- end of post title -->


<div class="post_thumb">
<?php if(has_post_thumbnail()) the_post_thumbnail(); ?>
</div> <!--end of post thumb nail-->

<div class="single_post_content">
<?php the_content(); ?> 
</div> <!--end of single post content-->

<div id="next_prev_links">
<div id="prev_link">
<?php previous_post_link(); ?>
</div> <!--end of pre_link-->

<div id="next_link">
<?php next_post_link(); ?>
</div> <!--end of next links-->

</div> <!--end of next prev links-->
</div> <!--end of post box -->



<?php endwhile;else: ?>
<p> No Posts Found </p>
<?php endif; ?>
 </div> <!-- end of body_content -->

<?php get_footer(); ?>