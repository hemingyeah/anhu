<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage test
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<div class="newsbanner" id="scrollNewimg">
	<ul class="clearfix">
    	<li><img class="sliderimg" src="/wp-content/themes/twentysixteen/images/ban1.jpg" width="100%"  /></li>
        <li><img class="sliderimg" src="/wp-content/themes/twentysixteen/images/about-banner.jpg" width="100%"  /></li>
    </ul>
</div>
<div class="newslist clearfix">
	<div class="listul">
    	<ul>
            <?php if (have_posts()) : ?>  
            <?php while (have_posts()) : the_post(); ?> 
              <li class="clearfix">
                    <a href="<?php echo get_permalink(); ?>" target="_blank"><img src="<?php echo get_content_first_image(get_the_content()); ?>" /></a>  
                    <div class="info">
                        <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
                        <?php esc_url( get_permalink() ); ?>
                        <?php Limit_Char(300); ?>
                        <em>来源：<?php echo get_post_meta(get_the_ID(),'from',true); ?>  时间：<?php the_time('Y-m-d'); ?> </em>
                    </div>
                </li>
            <?php endwhile; ?> 
           
        </ul>
       <div class="list-page clearfix"><?php par_pagenavi(5); ?></div>
        <?php
        /*原生分页*/
/*        the_posts_pagination( array(
            'prev_text'          => __( 'Previous page', 'twentysixteen' ),
            'next_text'          => __( 'Next page', 'twentysixteen' ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
        ) );*/
         ?>
         <?php endif; ?> 
    </div>
    <!-- <a class="news-more" href="javascript:;">点击加载更多...</a> -->
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

<?php get_footer(); ?>
<script type="text/javascript">
    function imgReload()
    {
        var imgHeight = 0;
        var wtmp = $("body").width();
        $("#scrollNewimg ul li").each(function(){
            $(this).css({width:wtmp + "px"});
        });
        $(".sliderimg").each(function(){
            var height = $(this).height();
            if(height<260){
                $(this).css({width: "auto",height:"260px"});
                imgHeight = 260;
            }else{
                $(this).css({width:wtmp + "px"});
                imgHeight = $(this).height();
            }
            
        });
    }

    $(window).resize(function(){imgReload();});

    $(document).ready(function(e) {
        imgReload();
        var unslider06 = $('#scrollNewimg').unslider({
            dots: true,
            fluid: true
        }),
        data06 = unslider06.data('unslider');
        
        $('.unslider-arrow06').click(function() {
            var fn = this.className.split(' ')[1];
            data06[fn]();
        });
    });
</script>
