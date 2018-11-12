<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <label class="screen-reader-text" for="s"> </label>
    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="Найти" class="btn btn-primary"/>
</form>