<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="newsdetail">
    <div class="newslist clearfix">
        <div class="listul phone-newsdetail">
            <div class="newsinfo-title">
                <span><?php the_title(); ?></span>
                <p>来源：<?php the_author(); ?>  时间：<?php the_time('Y-m-d'); ?></p>
            </div>
            <div class="news-information">
           	<?php 
           		while ( have_posts() ) : the_post();

           			// Include the single post content template.
           			the_content();


           			// End of the loop.
           		endwhile;
           	 ?>
            </div>
        </div>
        <div class="listquick">
        	<h3>推荐阅读</h3>
            <ul>
                <?php 
                    $previous_posts = get_posts('numberposts=15');
                     foreach($previous_posts as $post) :
                     setup_postdata($post); ?>
                    <li class="clearfix">
                    <em></em>
                     <a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php
                    the_title(); ?></a>
                    </li>
                    <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<?php get_footer(); ?>
