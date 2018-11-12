<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<style>
    ul{
        list-style-type: none;
    }
    p {
        margin-bottom: 0px;
    }
    img{
        float: left;
        padding: 0  10px 10px 10px;
    }
    .clear{
        clear:both;
        margin-bottom:20px;
    }
</style>
<div class="row">
    <div class="container" style="margin-bottom:50px;">
        <div class="bread_cr">
            <!-- Breadcrumb NavXT 6.0.4 -->
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Перейти на Бийский технологический институт." href="http://www.bti.secna.ru" class="home"><span property="name">Главная</span></a><meta property="position" content="1"></span> / <span property="itemListElement" typeof="ListItem"><span property="name">Результаты поиска</span><meta property="position" content="2"></span>        </div>

		<?php if ( have_posts() ) : ?>
			<h4><?php printf( __( 'Результаты поиска: %s', 'univer2' ), '<span>' . get_search_query() . '</span>' ); ?></h4>
		<?php else : ?>
			<h4><?php _e( 'Результаты поиска', 'univer2' ); ?></h4>
		<?php endif; ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
                <a href="<? echo get_permalink();?>"><? the_title(); ?> <?  the_post_thumbnail();?> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                <? the_excerpt();?>

                <? the_category();?>
                <div class="clear"></div>
            <?	endwhile; // End of the loop.



		else : ?>

			<p><?php _e( 'Извините, по вашему запросу ничего не найдено. Попробуйте другие ключевые слова.', 'univer2' ); ?></p>
			<?php
				get_search_form();

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
</div>
<?php get_footer();
