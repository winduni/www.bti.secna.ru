<?php
/*
Template Name: smi
*/
?>
<?php get_header(); ?>
    <div class="row">
        <div class="container" style="margin-bottom:50px;">
            <div class="bread_cr">
                <?php
                if(function_exists('bcn_display'))
                {
                    bcn_display();
                }
                ?>
            </div>
            <div class="posts">
                <br>

                <h4><i class="fa fa-map-o terrakote" ></i>
                    <span class="head-h"><?php single_cat_title(); ?></span></h4>
                <style>

                    </style>
                <div>
                    <?php
                    $cat_args=array(
                        'child_of' => 24,
                        'orderby' => 'name',
                        'order' => 'ASC'
                    );
                    $categories=get_categories($cat_args);
                    foreach($categories as $category) {
                        $args=array(
                            'showposts' => -1,
                            'category__in' => array($category->term_id),
                            'caller_get_posts'=>1
                        );
                        $posts=get_posts($args);
                        if ($posts) {
                            echo '<h5>'.$category->name.'</h5> ';
                            foreach($posts as $post) {
                                setup_postdata($post);
                                ?>
                                <ul>
                                    <li>
                                        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><br/>
                                    </li>
                                </ul>
                                <?php
                            }
                        }
                    }
                    ?>

                </div>

            </div>

       </div>
    </div>
<?php get_footer(); ?>