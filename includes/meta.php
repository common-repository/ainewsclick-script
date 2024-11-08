<?php

function ainews_click_required_meta_init(): void {
    ?>
    <!--  AinewsClick required meta tags  -->
    <meta property="aiturec:title" content="<?php the_title(); ?>">
    <meta property="aiturec:description" content="<?php the_excerpt(); ?>">
    <meta property="aiturec:item_id" content="<?php the_ID(); ?>">
    <meta property="aiturec:image" content="<?php the_post_thumbnail_url(); ?>">
    <meta property="aiturec:datetime" content="<?php the_time( 'c' ); ?>">
    <meta property="aiturec:is_article" content="<?php echo is_single() ? "true" : "false" ?>">
    <!--  AinewsClick required meta tags  -->
    <?php
}